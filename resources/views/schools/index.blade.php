@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>🏫 সকল স্কুলের তালিকা</h2>
        <a href="{{ route('schools.create') }}" class="btn btn-accent">
            ＋ নতুন স্কুল যোগ করুন
        </a>
    </div>

    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" id="liveToastBtn">Show live toast</button>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>

        @if($schools->isEmpty())
            <div class="empty-state">
                <div class="icon">🏫</div>
                <p>এখনও কোনো স্কুল যোগ করা হয়নি।</p>
                <br>
                <a href="{{ route('schools.create') }}" class="btn btn-primary">প্রথম স্কুল যোগ করুন</a>
            </div>
        @else
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>নাম</th>
                        <th>ঠিকানা</th>
                        <th>রোল নং</th>
                        <th>সেকশন</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $school->name }}</strong></td>
                        <td>{{ Str::limit($school->address, 40) }}</td>
                        <td><span class="badge">{{ $school->roll_no }}</span></td>
                        <td><span class="badge">{{ $school->section }}</span></td>
                        <td>
                            <div style="display:flex;gap:8px;flex-wrap:wrap;">
                                <a href="{{ route('schools.show', $school) }}" class="btn btn-outline btn-sm">👁 দেখুন</a>
                                <a href="{{ route('schools.edit', $school) }}" class="btn btn-primary btn-sm">✏️ এডিট</a>
                                <form action="{{ route('schools.destroy', $school) }}" method="POST"
                                      onsubmit="return confirm('আপনি কি নিশ্চিতভাবে মুছতে চান?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">🗑 মুছুন</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toastTrigger = document.getElementById('liveToastBtn');
        const toastElement = document.getElementById('liveToast');

        if (toastTrigger && toastElement && window.bootstrap) {
            const toast = bootstrap.Toast.getOrCreateInstance(toastElement);

            toastTrigger.addEventListener('click', () => {
                toast.show();
            });
        }
    });
</script>
@endpush
