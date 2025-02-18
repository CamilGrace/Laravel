@if ($membership == 'platinum')
    <p>You have a Platinum membership!</p>
@elseif ($membership == 'gold')
    <p>You have a Gold membership!</p>
@else
    <p>You are a standard member.</p>
@endif
