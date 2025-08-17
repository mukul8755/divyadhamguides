@component('mail::message')
# New Contact Submission

- **Name:** {{ $contact->name }}
- **Email:** {{ $contact->email }}
- **Subject:** {{ $contact->subject }}
- **Message:**
{{ $contact->message }}

Thanks,  
{{ config('app.name') }}
@endcomponent
