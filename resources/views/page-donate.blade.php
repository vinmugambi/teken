@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header-intro')
<div class="container mx-auto py-8">
    <div class="max-w-4xl mx-auto px-4">
        <div>
            <h3 class="text-2xl pb-4">Donate securely via Paypal</h3>
            <paypal />
        </div>

        <div class="py-8">
            <h3 class="text-2xl pb-2">Donate to our bank account</h3>
            <div class="">
                <div class="px-1">
                    <ul>
                        <li class="flex flex-col md:flex-row pt-2 md:p-0">
                            <div class="w-full md:w-1/5 font-mono">Bank</div>
                            <div class="w-full md:w-4/5">National Australia Bank (NAB)</div>
                        </li>
                        <li class="flex flex-col md:flex-row pt-2 md:p-0">
                            <div class="w-full md:w-1/5 font-mono">Account</div>
                            <div class="w-full md:w-4/5"> Africa Australia Alliance for Peace and Reconciliation</div>
                        </li>
                        <li class="flex flex-col md:flex-row pt-2 md:p-0">
                            <div class="w-full md:w-1/5 font-mono">Number</div>
                            <div class="w-full md:w-4/5">187471629</div>
                        </li>
                        <li class="flex flex-col md:flex-row pt-2 md:p-0">
                            <div class="w-full md:w-1/5 font-mono">BSB</div>
                            <div class="w-full md:w-4/5">082637</div>
                        </li>
                    </ul>
                </div>
                <div class="px-1 pt-8">
                    <h3 class="text-2xl pb-2">Mail us a cheque</h3>
                    <p class="px-1">
                        Africa Australia Alliance for Peace and Reconciliation <br>
                        P.O. Box 730 Hamilton, NSW, 2303
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="bg-blue-100 text-blue-600">
    <div class="container mx-auto">
        <div class="max-w-4xl mx-auto py-2 px-4 text-xs">
            Global Alliance for peace is a registered charitable
            organisation
            within Australia. Donations over $2 are tax deductable. Our ABN is 16 544 925 200.
        </div>
    </div>
</div>


@endwhile
@endsection