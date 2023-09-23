<section class="mx-5">



    <table class="table m-auto">
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
            @if (isset($users))
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><button type="button" class="btn btn-primary">add employee</button></td>
                <td></td>
              </tr>
            @endforeach

            @endif
        </tbody>
      </table>
</section>
