@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>➕ নতুন স্কুল যোগ করুন</h2>
        <a href="{{ route('schools.index') }}" class="btn btn-outline btn-sm" style="color:#fff;border-color:#fff;">
            ← ফিরে যান
        </a>
    </div>
    <div class="card-body">

        <form action="{{ route('schools.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                {{-- নাম --}}
                <div class="form-group">
                    <label for="name">🏫 স্কুলের নাম <span style="color:red">*</span></label>
                    <input type="text"
                           id="name"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="স্কুলের নাম লিখুন">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- সেকশন --}}
                <div class="form-group">
                    <label for="section">📚 সেকশন <span style="color:red">*</span></label>
                    <input type="text"
                           id="section"
                           name="section"
                           class="form-control @error('section') is-invalid @enderror"
                           value="{{ old('section') }}"
                           placeholder="যেমন: ক, খ, A, B">
                    @error('section')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- রোল নম্বর --}}
                <div class="form-group">
                    <label for="roll_no">🔢 রোল নম্বর <span style="color:red">*</span></label>
                    <input type="text"
                           id="roll_no"
                           name="roll_no"
                           class="form-control @error('roll_no') is-invalid @enderror"
                           value="{{ old('roll_no') }}"
                           placeholder="রোল নম্বর লিখুন">
                    @error('roll_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ঠিকানা full width --}}
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="address">📍 ঠিকানা <span style="color:red">*</span></label>
                    <textarea id="address"
                              name="address"
                              class="form-control @error('address') is-invalid @enderror"
                              rows="3"
                              placeholder="সম্পূর্ণ ঠিকানা লিখুন">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">💾 সেভ করুন</button>
                <a href="{{ route('schools.index') }}" class="btn btn-outline">বাতিল করুন</a>
            </div>
        </form>

    </div>
</div>
@endsection
