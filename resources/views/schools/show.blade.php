@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>🏫 স্কুলের বিস্তারিত তথ্য</h2>
        <a href="{{ route('schools.index') }}" class="btn btn-outline btn-sm" style="color:#fff;border-color:#fff;">
            ← ফিরে যান
        </a>
    </div>
    <div class="card-body">

        <div class="detail-grid">
            <div class="detail-item">
                <div class="detail-label">🏫 নাম</div>
                <div class="detail-value">{{ $school->name }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">📍 ঠিকানা</div>
                <div class="detail-value">{{ $school->address }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">🔢 রোল নম্বর</div>
                <div class="detail-value">{{ $school->roll_no }}</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">📚 সেকশন</div>
                <div class="detail-value">{{ $school->section }}</div>
            </div>
        </div>

        <div style="margin-top:2rem;display:flex;gap:12px;">
            <a href="{{ route('schools.edit', $school) }}" class="btn btn-primary">✏️ এডিট করুন</a>
            <form action="{{ route('schools.destroy', $school) }}" method="POST"
                  onsubmit="return confirm('আপনি কি নিশ্চিতভাবে মুছতে চান?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">🗑 মুছুন</button>
            </form>
            <a href="{{ route('schools.index') }}" class="btn btn-outline">← তালিকায় ফিরুন</a>
        </div>

    </div>
</div>
@endsection
