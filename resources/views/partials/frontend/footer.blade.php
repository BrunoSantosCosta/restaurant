
<footer>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
					<div class="footer_wp">
						<i class="icon_pin_alt"></i>
						<h3>Endereço</h3>
						<p>{!! $general ? $general->address : '' !!}</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
					<div class="footer_wp">
						<i class="icon_tag_alt"></i>
						<h3>Contato</h3>
						<p>
							<a href="tel:009442323221">{{ $general ? $general->primary_phone : '' }}</a>
							<a href="tel:009442323221">{{ $general ? $general->primary_phone : '' }}</a>
							<a href="#0">{{ $general ? $general->email : '' }}</a>
						</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
					<h3>Siga Nas Redes Sociais</h3>
                    <div class="follow_us">
                        <ul>
                            <li><a href="{{ $general ? $general->facebook : '' }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $general ? $general->twitter : '' }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $general ? $general->instagram : '' }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-12 text-center">
					<p class="copy">© {{ $general ? $general->company_name  : '' }}</p>
				</div>
			</div>
			<p class="text-center"></p>
		</div>
	</footer>
