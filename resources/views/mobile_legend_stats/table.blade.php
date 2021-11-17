<div class="table-responsive">
    <table class="table" id="mobileLegendStats-table">
        <thead>
            <tr>
                <th>Mobile Legend Id</th>
        <th>Best Hero</th>
        <th>Most Mvp</th>
        <th>Most Kills</th>
        <th>Best Farmer</th>
        <th>Most Win Hero</th>
        <th>Max Number Of Kills</th>
        <th>Max Number Of Death</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mobileLegendStats as $mobileLegendStat)
            <tr>
                <td>{{ $mobileLegendStat->mobile_legend_id }}</td>
            <td>{{ $mobileLegendStat->best_hero }}</td>
            <td>{{ $mobileLegendStat->most_mvp }}</td>
            <td>{{ $mobileLegendStat->most_kills }}</td>
            <td>{{ $mobileLegendStat->best_farmer }}</td>
            <td>{{ $mobileLegendStat->most_win_hero }}</td>
            <td>{{ $mobileLegendStat->max_number_of_kills }}</td>
            <td>{{ $mobileLegendStat->max_number_of_death }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mobileLegendStats.destroy', $mobileLegendStat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mobileLegendStats.show', [$mobileLegendStat->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mobileLegendStats.edit', [$mobileLegendStat->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
