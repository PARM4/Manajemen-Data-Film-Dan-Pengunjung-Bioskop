
<a href="{{ $edit }}" class="btn btn-success btn-sm" style="margin-right: 10px;">
    <i class="fas fa-edit"></i> Edit
</a>

<form action="{{ $delete }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="fas fa-trash-alt"></i> Hapus
    </button>
</form>