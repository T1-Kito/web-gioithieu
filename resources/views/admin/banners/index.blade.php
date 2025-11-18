@extends('layouts.app')

@section('title', 'Quản lý Banner')

@section('content')
<div class="page-content">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 class="page-title">Quản lý Banner</h1>
            <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">Thêm Banner Mới</a>
        </div>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <thead>
                    <tr style="background: #f8f9fa;">
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Hình ảnh</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Tiêu đề</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Thứ tự</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Trạng thái</th>
                        <th style="padding: 15px; text-align: left; border-bottom: 2px solid #dee2e6;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($banners as $banner)
                        <tr>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <img src="{{ Storage::url($banner->image) }}" alt="{{ $banner->title }}" 
                                     style="width: 150px; height: 80px; object-fit: cover; border-radius: 4px;">
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <strong>{{ $banner->title }}</strong>
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">{{ $banner->order }}</td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                @if($banner->is_active)
                                    <span style="color: #28a745;">✓ Hoạt động</span>
                                @else
                                    <span style="color: #dc3545;">✗ Tắt</span>
                                @endif
                            </td>
                            <td style="padding: 15px; border-bottom: 1px solid #dee2e6;">
                                <a href="{{ route('admin.banners.edit', $banner) }}" class="btn btn-primary btn-small" style="margin-right: 5px;">Sửa</a>
                                <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline" 
                                            onclick="return confirm('Bạn có chắc muốn xóa banner này?')"
                                            style="background: #dc3545; color: white; border-color: #dc3545;">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding: 30px; text-align: center; color: #6c757d;">
                                Chưa có banner nào. <a href="{{ route('admin.banners.create') }}">Tạo banner đầu tiên</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


