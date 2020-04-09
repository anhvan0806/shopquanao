
@extends('master')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.1282206792357!2d106.80504081447751!3d10.877851060288691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8a5f4e477e9%3A0x29d5aeb365cee20b!2sKTX%20Khu%20A%20%C4%90HQG%20TP.HCM!5e0!3m2!1svi!2s!4v1573995631341!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Điền mẫu liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<form action="" method="post" class="contact-form">	
						<input type= hidden name="_token" value="{!! csrf_token() !!}">
						<div class="form-block">
							<input name="name" type="text" placeholder="Họ và tên">
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Email">
						</div>
						<div class="form-block">
							<input name="subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="message" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						3 Khu phố 6, Linh trung, Thủ Đức <br>
						Tp. HCM
					</p>
					<div class="space20">&nbsp;</div>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Việc làm</h6>
					<br>
					<p class="abc">
						Chúng tôi đang tìm kiếm những cộng sự có năng lực để tham gia vào nhóm chúng tôi. <br>
						<a href="https://mail.google.com/">UIT@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
