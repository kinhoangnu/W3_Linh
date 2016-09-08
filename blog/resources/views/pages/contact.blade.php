@extends('main')

@section('title', '| Contact page')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form">
            <div class="form-group">
                <label name="email">
                    Email:
                    <input id="email" name="email" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label name="subject">
                    Subject:
                    <input id="subject" name="subject" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label name="message">
                    Message:
                    <textarea id="message" name="message" class="form-control">
                        Type your message here...
                    </textarea> 
                </label>
            </div>
            <input type="submit" value="Send message" class="btn btn-success">

        </form>
    </div>
</div>
@endsection