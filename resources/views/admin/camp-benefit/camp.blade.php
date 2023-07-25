@include('components.alert')
<div class="card mt-2">
    <div class="card-body">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td colspan="2">Camp</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $camp->title }}</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>${{ $camp->price }}k</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
