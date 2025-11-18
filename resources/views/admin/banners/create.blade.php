@extends('layouts.app')

@section('title', 'Thêm Banner Mới')

@section('content')
<div class="page-content">
    <div class="container">
        <h1 class="page-title">Thêm Banner Mới</h1>

        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 800px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            @csrf

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 600;">Hình ảnh * (Kích thước khuyến nghị: 1920x1080px)</label>
                <input type="file" name="image" accept="image/*" required
                       style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                @error('image')
                    <span style="color: #dc3545; font-size: 14px;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Text</label>
                    <input type="text" name="button_text_1" value="{{ old('button_text_1') }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Link</label>
                    <input type="text" name="button_link_1" value="{{ old('button_link_1') }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Text</label>
                    <input type="text" name="button_text_2" value="{{ old('button_text_2') }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Link</label>
                    <input type="text" name="button_link_2" value="{{ old('button_link_2') }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Thứ tự hiển thị</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <label style="display: flex; align-items: center; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                               style="margin-right: 8px; width: 18px; height: 18px;">
                        <span>Kích hoạt banner</span>
                    </label>
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary">Lưu Banner</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-outline">Hủy</a>
            </div>
        </form>
    </div>
</div>
@endsection

