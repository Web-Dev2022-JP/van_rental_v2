@extends('../../dashboard.template.client-dashboard-template')

@section('title') Message Driver @endsection

@section('content')

<div class="messageDriver-container row justify-content-center p-5">
  <form class="message-card" action="" method="POST">
    <div class="driver-details d-flex align-items-center p-2 gap-2">
      <i class='bx bxs-user'></i>
      <div class="driver-name">JOHN DOE DEE NALIGO</div>
    </div>
    <input type="text" name="message" id="message" placeholder="INPUT MESSAGE" autocomplete="off">
    <button class="send-message bx bx-up-arrow-alt"></button>
  </form>
</div>

@endsection