@extends('layouts.app')

@section('main')
    <div class="column">
        <section class="section">
            <div class="columns">
                <div class="column">
                    <p class="title is-4">Products</p>
                    <products-table :products='@json($products)'></products-table>
                </div>
            </div>
        </section>
    </div>
@endsection
