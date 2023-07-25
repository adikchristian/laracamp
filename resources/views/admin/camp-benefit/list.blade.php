<div class="card-header">Data Benefit</div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($camp->Benefit as $num => $item)
                <tr>
                    <td>{{ $num + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('admin.camp-benefit.edit', $item->id).'?q='.$camp->id }}" class="btn btn-sm btn-warning text-white">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <form action="{{ route('admin.camp-benefit.destroy', $item->id).'?q='.$camp->id }}" method="POST"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                    class="fas fa-trash text-white"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center"><b>Tidak Ada Data</b></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
