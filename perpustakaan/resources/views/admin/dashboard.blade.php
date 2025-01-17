<!-- Include Header -->
@include('templateadmin.header')

<!-- Include Sidebar -->
@include('templateadmin.sidebar')

<body class="hold-transition sidebar-mini dark-mode">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success text-white p-3">
                                <div class="inner">
                                    <h5 class="font-weight-bold">Peminjaman Hari Ini</h5>
                                    <h3 class="display-4">{{ $jumlahPeminjamanHariIni }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-cash" style="font-size: 3rem; opacity: 0.7;"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info text-white p-3">
                                <div class="inner">
                                    <h5 class="font-weight-bold">Pengunjung Hari Ini</h5>
                                    <h3 class="display-4">{{ $jumlahPengunjungHariIni }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person" style="font-size: 3rem; opacity: 0.7;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        To Do List
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm"></ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <input type="text" id="new-todo" class="form-control" placeholder="Add new todo">
                                        <div class="input-group-append">
                                            <button onclick="addTodo()" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                    <ul class="todo-list" id="todo-list" data-widget="todo-list">
                                        <!-- Default To-Do items -->
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                <label for="todoCheck1"></label>
                                            </div>
                                            <span class="text">Menambah Stok</span>
                                            <div class="tools">
                                                <i class="fas fa-trash" onclick="deleteTodo(this)"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo2" id="todoCheck2">
                                                <label for="todoCheck2"></label>
                                            </div>
                                            <span class="text">Melihat Penjualan</span>
                                            <div class="tools">
                                                <i class="fas fa-trash" onclick="deleteTodo(this)"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                <label for="todoCheck3"></label>
                                            </div>
                                            <span class="text">Menampilkan Laporan</span>
                                            <div class="tools">
                                                <i class="fas fa-trash" onclick="deleteTodo(this)"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            loadTodos();
        });
        
        function addTodo() {
            var todoText = document.getElementById('new-todo').value;
            if (todoText === '') {
                alert('Please enter a to-do item.');
                return;
            }
        
            var li = document.createElement('li');
            li.innerHTML = `
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo-new" id="todoCheck-new">
                    <label for="todoCheck-new"></label>
                </div>
                <span class="text">${todoText}</span>
                <div class="tools">
                    <i class="fas fa-trash" onclick="deleteTodo(this)"></i>
                </div>
            `;
        
            document.getElementById('todo-list').appendChild(li);
            document.getElementById('new-todo').value = '';
            saveTodos();
        }
        
        function deleteTodo(element) {
            element.parentElement.parentElement.remove();
            saveTodos();
        }
        
        function saveTodos() {
            var todoList = [];
            document.querySelectorAll('#todo-list li').forEach(function(li) {
                var todoText = li.querySelector('.text').innerText;
                todoList.push(todoText);
            });
            localStorage.setItem('todoList', JSON.stringify(todoList));
        }
        
        function loadTodos() {
            // Clear the current list to avoid duplication
            document.getElementById('todo-list').innerHTML = '';
        
            var todoList = JSON.parse(localStorage.getItem('todoList'));
            if (todoList) {
                todoList.forEach(function(todoText) {
                    var li = document.createElement('li');
                    li.innerHTML = `
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo-new" id="todoCheck-new">
                            <label for="todoCheck-new"></label>
                        </div>
                        <span class="text">${todoText}</span>
                        <div class="tools">
                            <i class="fas fa-trash" onclick="deleteTodo(this)"></i>
                        </div>
                    `;
                    document.getElementById('todo-list').appendChild(li);
                });
            }
        }
        </script>
</body>

<!-- Include Footer -->

