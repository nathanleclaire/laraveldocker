@extends('layouts.default')

@section('content')
<p> Lightning Fast is a website developed and maintained by <a href="http://nathanleclaire.com">Nathan LeClaire</a>.  It uses Docker and Fig and it's pretty rad. </p>
List of stuff deployed to dev and production, running the same in both environments:

<ul>
<li>HipHop Virtual Machine (Faster PHP - nice!)</li>
<li>nginx</li>
<li>MySQL for data</li>
<li>Beanstalk for background jobs</li>
<li>Redis for performant data storage</li>
</ul>
@stop
