@component('mail::message')
# Introduction

<div>
    Nom complet du client : {{ $client_name }}
    </div>
<div>
    Email du client : {{ $client_email }}
</div>
<div>
    Contenu de la demande : {{ $demand_content }}
</div>

# Cordialement

@endcomponent
