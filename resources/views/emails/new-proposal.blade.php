@component('mail::message')
# Hi,

A new proposal has been submitted.<br/>
From:: {{ $proposal->user->email }}<br/>
Hours:: {{ $proposal->hours }}

@component('mail::button', ['url' => route('projects.show', $proposal->project)])
Click here to view the projects proposals
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
