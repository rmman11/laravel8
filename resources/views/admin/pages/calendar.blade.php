
    @extends('admin.layouts.master')
    @section('pageTitle', 'Calendar')
    @section('content')

    <div class="row">

          <div class="card">

                <div class="card-header bg-info text-white">

                    <h4>Calendar</h4>

                </div>

                <div class="card-body">


        <form action="#" method="GET">
            Venue:
            <select name="venue_id">
                <option value="">-- all venues --</option>
                @foreach($venues as $venue)
                    <option value="{{ $venue->id }}"
                            @if (request('venue_id') == $venue->id) selected @endif>{{ $venue->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-sm btn-primary">Filter</button>
        </form>

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>



</div>
</div>
</div>


@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events={!! json_encode($events) !!};
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: events,
            })
        });
</script>
@stop