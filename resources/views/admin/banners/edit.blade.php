@extends('layouts.app')

@section('title', 'Sửa Banner')

@section('content')
<div class="page-content">
    <div class="container">
        <h1 class="page-title">Sửa Banner</h1>

        <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data" style="max-width: 800px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 600;">Hình ảnh hiện tại</label>
                <img src="{{ Storage::url($banner->image) }}" alt="{{ $banner->title }}" 
                     style="max-width: 100%; height: auto; border-radius: 4px; margin-bottom: 10px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 600;">Thay đổi hình ảnh (Để trống nếu không muốn thay đổi)</label>
                <input type="file" name="image" accept="image/*"
                       style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                @error('image')
                    <span style="color: #dc3545; font-size: 14px;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Text</label>
                    <input type="text" name="button_text_1" value="{{ old('button_text_1', $banner->button_text_1) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 1 - Link</label>
                    <input type="text" name="button_link_1" value="{{ old('button_link_1', $banner->button_link_1) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Text</label>
                    <input type="text" name="button_text_2" value="{{ old('button_text_2', $banner->button_text_2) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Nút 2 - Link</label>
                    <input type="text" name="button_link_2" value="{{ old('button_link_2', $banner->button_link_2) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Thứ tự hiển thị</label>
                    <input type="number" name="order" value="{{ old('order', $banner->order) }}"
                           style="width: 100%; padding: 12px; border: 2px solid #e9ecef; border-radius: 4px;">
                </div>
                <div style="display: flex; align-items: center; margin-top: 30px;">
                    <label style="display: flex; align-items: center; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $banner->is_active) ? 'checked' : '' }}
                               style="margin-right: 8px; width: 18px; height: 18px;">
                        <span>Kích hoạt banner</span>
                    </label>
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary">Cập nhật Banner</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-outline">Hủy</a>
            </div>
        </form>
    </div>
</div>
@endsection

