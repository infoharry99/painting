@extends('frontend.layouts.master')
@section('title', __('home.title')) {{-- Translatable title --}}
@section('main-content')
<style>
        /* CSS for the Comment Page Design */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
        }
        .comment-page {
            padding: 50px 0;
            background-color: #fff;
        }
        .comment-page .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
        }
        .breadcrumb {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }
        .page-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #212529;
        }
        .comment-form textarea {
            width: 100%;
            min-height: 150px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            resize: vertical;
            font-size: 16px;
            color: #333;
        }
        .submit-comment {
            display: inline-block;
            margin-top: 10px;
            background-color: #ff5e14;
            color: #fff;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
        }
        .submit-comment:hover {
            background-color: #e04d0c;
        }
        .comment-list {
            margin-top: 30px;
        }
        .comment {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .comment-header {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }
        .comment-date {
            color: #888;
            font-size: 14px;
            margin-left: 10px;
        }
        .reply-button {
            background: none;
            border: none;
            color: #ff5e14;
            font-size: 14px;
            margin-left: 20px;
            cursor: pointer;
        }
        .reply-button:hover {
            text-decoration: underline;
        }
        .comment-body {
            font-size: 15px;
            color: #555;
            line-height: 1.6;
        }
        .reply-form {
            margin-top: 10px;
            margin-left: 40px;
        }
        .reply-form textarea {
            width: 100%;
            min-height: 100px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            resize: vertical;
            font-size: 15px;
            color: #333;
        }
        .reply-form button {
            margin-top: 5px;
            background-color: #ff5e14;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .reply-form button:hover {
            background-color: #e04d0c;
        }
        .reply {
            margin-top: 15px;
            margin-left: 40px;
            border-left: 2px solid #ddd;
            padding-left: 15px;
        }
    </style>
    <!-- Main Comment Section -->
    <section class="comment-page">
        <div class="container">
            <!-- Breadcrumb (adjust paths as needed) -->
            <nav class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> / 
                <a href="{{ url('/gallery') }}">Gallery</a> / 
                Comment
            </nav>

            <!-- Page Title -->
            <h1 class="page-title">Product Comments</h1>

            <!-- Comment Form -->
            <form action="{{ route('product.comment', $product->id) }}" method="POST" class="comment-form">
                @csrf
                <textarea name="comment" placeholder="Write your comment..." required></textarea>
                <button type="submit" class="submit-comment">➤ Post Your Comment</button>
            </form>

            <!-- Comments List -->
            <div class="comment-list">
                @foreach($product->comments()->whereNull('parent_id')->latest()->get() as $comment)
                    <div class="comment">
                        <div class="comment-header">
                            <strong>{{ $comment->user->name }}</strong>
                            <span class="comment-date">
                                {{ $comment->created_at->format('d/m/Y') }}
                            </span>
                            <button type="button" class="reply-button" data-id="{{ $comment->id }}">↩ Reply</button>
                        </div>
                        <div class="comment-body">
                            {{ $comment->comment }}
                        </div>

                        <!-- Reply Form (Hidden by default) -->
                        <form action="{{ route('product.comment', $product->id) }}" method="POST" class="reply-form" id="reply-form-{{ $comment->id }}" style="display: none;">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <textarea name="comment" placeholder="Write your reply..." required></textarea>
                            <button type="submit">Post Reply</button>
                        </form>

                        <!-- Replies List -->
                        @if($comment->replies->count() > 0)
                            @foreach($comment->replies as $reply)
                                <div class="reply">
                                    <div class="comment-header">
                                        <strong>{{ $reply->user->name }}</strong>
                                        <span class="comment-date">
                                            {{ $reply->created_at->format('d/m/Y') }}
                                        </span>
                                    </div>
                                    <div class="comment-body">
                                        {{ $reply->comment }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- JavaScript to Toggle Reply Forms -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.reply-button').forEach(function (button) {
                button.addEventListener('click', function () {
                    var id = this.getAttribute('data-id');
                    var form = document.getElementById('reply-form-' + id);
                    // Toggle the display of the reply form
                    if (form.style.display === 'none' || form.style.display === '') {
                        form.style.display = 'block';
                    } else {
                        form.style.display = 'none';
                    }
                });
            });
        });
    </script>


@endsection