@section('page_title', "Messages | QwikCare Business Listing")
@extends('layouts.dash')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Messages</li>
      </ol>
		<div class="box_general">
			<h4>Inbox</h4>
			<div class="list_general">
				<ul>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar1.jpg" alt=""></figure>
						<h4>Enzo Ferrari <i class="unread">Unread</i></h4>
						<p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
					</li>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar2.jpg" alt=""></figure>
						<h4>Andrea Lomarco <i class="unread">Unread</i></h4>
						<p>Ex omnis error aliquam quo, eu eos atqui accusam, ex nec sensibus erroribus principes. No pro albucius eloquentiam accommodare. Mei id illud posse persius. Nec eu dico lucilius delicata, qui propriae voluptaria eu.</p>
					</li>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar3.jpg" alt=""></figure>
						<h4>Marc Twain <i class="read">Read</i></h4>
						<p>Ex omnis error aliquam quo, eu eos atqui accusam, ex nec sensibus erroribus principes. No pro albucius eloquentiam accommodare. Mei id illud posse persius. Nec eu dico lucilius delicata, qui propriae voluptaria eu.</p>
					</li>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar4.jpg" alt=""></figure>
						<h4>Lucas Swing <i class="read">Read</i></h4>
						<p>Cum id mundi admodum menandri, eum errem aperiri at. Ut quas facilis qui, euismod admodum persequeris cum at. Summo aliquid eos ut, eum facilisi salutatus ne. Mazim option abhorreant ne his.</p>
					</li>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar5.jpg" alt=""></figure>
						<h4>Steve Wornder <i class="read">Read</i></h4>
						<p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
					</li>
					<li>
						<span>2 hours ago</span>
						<figure><img src="img/avatar6.jpg" alt=""></figure>
						<h4>Mark Shoemaker <i class="unread">Unread</i></h4>
						<p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
					</li>
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
@endsection