@include('layout.header')

    <div class="container">
        <h3>Users</h3>
    </div>
    <div class="container">
        @include('block.flash_msg')
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Note</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->note}}</td>
                        <td><a href="{{route('user.edit',$user->id)}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa!')"  href="{{route('user.destroy',$user->id)}}"><button type="button" class="btn btn-danger">Xóa</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <a href="{!! route('user.create') !!}"><button type="button" class="btn btn-primary">Thêm mới</button></a> 
    </div>

@include('layout.footer')



