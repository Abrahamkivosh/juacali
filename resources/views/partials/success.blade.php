@if (session()->has('success'))
    <div id="message" class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
            @if (session()->get('cart'))
                <a class=" fa-font-awesome" href="/cart">Proceed to cart List</a>
            @endif
        </strong>
    </div>

@endif

