@if($appFooter)
{!! $appFooter !!}
@else
<!--<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @if($showSupport)
                <p>
                    {!! trans('cachet.powered_by') !!}
                    @if($showTimezone)
                    {{ trans('cachet.timezone', ['timezone' => $timezone]) }}
                    @endif
                </p>
                @endif
            </div>
            <div class="col-sm-8">
                <ul class="list-inline">
                    @if($currentUser || $dashboardLink)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a>
                    </li>
                    @endif
                    @if($currentUser)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('auth.logout') }}">{{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('feed.rss') }}">{{ trans('cachet.rss-feed') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('feed.atom') }}">{{ trans('cachet.atom-feed') }}</a>
                    </li>
                    @if($enableSubscribers)
                    <li>
                        <a class="btn btn-success btn-outline" href="{{ cachet_route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
-->
<div id="footer">
	<div class="container">
		<div class="line-separator text-center"><img src="images/separator.png" alt="separator" class=""></div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3">
				<h5 class="footer-title">Using Heroic</h5>
				<ul class="footer-links">
					<li><a href="https://app.heroicnow.com" class="">Log in to your Account</a></li>
					<li><a href="https://heroicnow.com/start.php" class="">Create a New Account</a></li>
				</ul>
			</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
				<h5 class="footer-title">Help & Support</h5>
				<ul class="footer-links">
					<li><a href="https://heroicnow.com/helpcenter/" class="">Help Center</a></li>
					<li><a href='cat=getting-started' class=''>Getting Started</a></li><li><a href='cat=creating-pages' class=''>Creating Pages</a></li><li><a href='cat=blogging' class=''>Blogging</a></li><li><a href='cat=popups' class=''>Popups</a></li><li><a href='cat=fonts-styles-colors' class=''>Fonts, Colors & Styles</a></li><li><a href='cat=integrating' class=''>Integrating with Other Platforms</a></li><li><a href='cat=domains' class=''>Domains</a></li><li><a href='cat=account' class=''>Account</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<h5 class="footer-title">Site Categories</h5>
				<ul class="footer-links">
					<li><a href="https://heroicnow.com/sites.php" class="">All Sites</a></li>
					<li><a href="https://heroicnow.com/sites.php#coach" class="">Coaches</a></li>
					<li><a href="https://heroicnow.com/sites.php#speaker" class="">Speaker Sites</a></li>
					<li><a href="https://heroicnow.com/sites.php#author" class="">Author Sites</a></li>
					<li><a href="https://heroicnow.com/sites.php#health" class="">Health & Fitness Sites</a></li>
					<li><a href="https://heroicnow.com/sites.php#personalbrand" class="">Personal Brand Sites</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<h5 class="footer-title">Company</h5>
				<ul class="footer-links">
					<li><a href="#" class="">About us</a></li>
					<li><a href="#" class="">Contact</a></li>
					<li><a href="/careers.php" class="">Careers</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endif

@include("partials.analytics")
