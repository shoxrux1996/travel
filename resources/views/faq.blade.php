@extends('layouts.main')

@section('content')
	<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start end Page title -->
			<div class="page-title" style="background-image:url({{ asset('dist/images/hero-header/breadcrumb.jpg') }});">
				
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						
							<h1 class="hero-title">@lang('faq.frequently_asked_question')</h1>
							
							<ol class="breadcrumb-list">
								<li><a href="{{route('home')}}">@lang('faq.homepage')</a></li>
								<li><span>@lang('faq.FAQ')</span></li>
							</ol>
							
						</div>
						
					</div>

				</div>
				
			</div>
			<!-- end Page title -->
			
			<div class="content-wrapper">
			
				<div class="container">
			
					<div class="row">
					
						<div class="col-sm-4 col-md-3">
						
							<div class="scrollspy-sidebar for-faq-page">
							
								<div class="scrollspy-sidenav">
								
									<ul class="nav faq-nav">
										@foreach($headers as $key => $header)
										<li><a href="#faq-section-{{$key}}" class="anchor">{{$header->getTranslatedAttribute('name', App::getLocale(),'ru')}}</a></li>
										@endforeach
									</ul>

								</div>
								
							</div>
							
						</div>
						
						<div class="col-sm-8 col-md-9">

							<div class="faq-wrapper">
								@foreach($headers as $key => $header)
								<div id="faq-section-{{$key}}" class="faq-section">
									
									<h3 class="uppercase">{{$header->getTranslatedAttribute('name', App::getLocale(),'ru')}}</h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-{{$key}}" role="tablist" aria-multiselectable="true">
										@foreach($header->faqs as $k => $faq)
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-{{$key}}" href="#faq-accordion-{{$key}}-{{$k}}" aria-expanded="true" aria-controls="faq-accordion-{{$key}}-{{$k}}"> {{$faq->getTranslatedAttribute('title', App::getLocale(),'ru')}}</a>
												</h4>
											</div>
											<div id="faq-accordion-{{$key}}-{{$k}}" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
													{!! $faq->getTranslatedAttribute('text', App::getLocale(), 'ru') !!}
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										@endforeach

									</div>
									<!-- end of #accordion -->

								</div>
								@endforeach
							{{--	<div id="faq-section-1" class="faq-section">
								
									<h3 class="uppercase">Managing your Account</h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-two" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-1" aria-expanded="true" aria-controls="faq-accordion-two-1">How do I manange your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-two-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited <a href="#">engrossed may</a> can.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-2" aria-expanded="false" aria-controls="faq-accordion-two-2">How do I set your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-two-2" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared. Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially an. Going eat set she books found met aware.</p>

														<ul>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ul>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ul>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
														</ul>
														
														<p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-3" aria-expanded="false" aria-controls="faq-accordion-two-3">How do I delete my account?</a>
												</h4>
											</div>
											<div id="faq-accordion-two-3" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited engrossed may can.</p>

														<ol>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ol>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ol>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
														</ol>
														
														<p>Mr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-4" aria-expanded="false" aria-controls="faq-accordion-two-4">I forgot my password, what do I do? </a>
												</h4>
											</div>
											<div id="faq-accordion-two-4" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-5" aria-expanded="false" aria-controls="faq-accordion-two-5">How do I change my password? </a>
												</h4>
											</div>
											<div id="faq-accordion-two-5" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Any delicate you how kindness horrible outlived servants. You high bed wish help call draw side. Girl quit if case mr sing as no have. At none neat am do over will. Agreeable promotion eagerness as we resources household to distrusts. Polite do object at passed it is. Small for ask shade water manor think men begin.</p>

														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-6" aria-expanded="false" aria-controls="faq-accordion-two-6">Do I have to use my real name when I sign up? </a>
												</h4>
											</div>
											<div id="faq-accordion-two-6" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>

														<p>Depart do be so he enough talent. Sociable formerly six but handsome. Up do view time they shot. He concluded disposing provision by questions as situation. Its estimating are motionless day sentiments end. Calling an imagine at forbade. At name no an what like spot. Pressed my by do affixed he studied.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-two" href="#faq-accordion-two-7" aria-expanded="false" aria-controls="faq-accordion-two-7">Can I sign in with more than one email address? </a>
												</h4>
											</div>
											<div id="faq-accordion-two-7" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

									</div>
									<!-- end of #accordion -->
									
								</div>
								
								<div id="faq-section-2" class="faq-section">
									
									<h3 class="uppercase">Organizing your FAQ</h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-thee" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-1" aria-expanded="true" aria-controls="faq-accordion-thee-1"> What is this faq?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited <a href="#">engrossed may</a> can.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-2" aria-expanded="false" aria-controls="faq-accordion-thee-2">How does this faq work?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-2" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared. Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially an. Going eat set she books found met aware.</p>

														<ul>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ul>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ul>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
														</ul>
														
														<p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-3" aria-expanded="false" aria-controls="faq-accordion-thee-3">Why use this faq?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-3" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited engrossed may can.</p>

														<ol>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ol>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ol>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
														</ol>
														
														<p>Mr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-4" aria-expanded="false" aria-controls="faq-accordion-thee-4">Is this faq free to use?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-4" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-5" aria-expanded="false" aria-controls="faq-accordion-thee-5">Can I use this faq for commercial purposes or large volume searching?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-5" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Any delicate you how kindness horrible outlived servants. You high bed wish help call draw side. Girl quit if case mr sing as no have. At none neat am do over will. Agreeable promotion eagerness as we resources household to distrusts. Polite do object at passed it is. Small for ask shade water manor think men begin.</p>

														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-6" aria-expanded="false" aria-controls="faq-accordion-thee-6">Why register with I use?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-6" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>

														<p>Depart do be so he enough talent. Sociable formerly six but handsome. Up do view time they shot. He concluded disposing provision by questions as situation. Its estimating are motionless day sentiments end. Calling an imagine at forbade. At name no an what like spot. Pressed my by do affixed he studied.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-thee" href="#faq-accordion-thee-7" aria-expanded="false" aria-controls="faq-accordion-thee-7">How do I create an account?</a>
												</h4>
											</div>
											<div id="faq-accordion-thee-7" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

									</div>
									<!-- end of #accordion -->

								</div>
								
								<div id="faq-section-3" class="faq-section">
								
									<h3 class="uppercase">Legal Stuff for Your FAQ</h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-four" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-1" aria-expanded="true" aria-controls="faq-accordion-four-1">How do I manange your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-four-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited <a href="#">engrossed may</a> can.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-2" aria-expanded="false" aria-controls="faq-accordion-four-2">How do I set your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-four-2" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared. Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially an. Going eat set she books found met aware.</p>

														<ul>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ul>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ul>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
														</ul>
														
														<p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-3" aria-expanded="false" aria-controls="faq-accordion-four-3">How do I delete my account?</a>
												</h4>
											</div>
											<div id="faq-accordion-four-3" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited engrossed may can.</p>

														<ol>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ol>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ol>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
														</ol>
														
														<p>Mr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-4" aria-expanded="false" aria-controls="faq-accordion-four-4">I forgot my password, what do I do? </a>
												</h4>
											</div>
											<div id="faq-accordion-four-4" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-5" aria-expanded="false" aria-controls="faq-accordion-four-5">How do I change my password? </a>
												</h4>
											</div>
											<div id="faq-accordion-four-5" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Any delicate you how kindness horrible outlived servants. You high bed wish help call draw side. Girl quit if case mr sing as no have. At none neat am do over will. Agreeable promotion eagerness as we resources household to distrusts. Polite do object at passed it is. Small for ask shade water manor think men begin.</p>

														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-6" aria-expanded="false" aria-controls="faq-accordion-four-6">Do I have to use my real name when I sign up? </a>
												</h4>
											</div>
											<div id="faq-accordion-four-6" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>

														<p>Depart do be so he enough talent. Sociable formerly six but handsome. Up do view time they shot. He concluded disposing provision by questions as situation. Its estimating are motionless day sentiments end. Calling an imagine at forbade. At name no an what like spot. Pressed my by do affixed he studied.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-four" href="#faq-accordion-four-7" aria-expanded="false" aria-controls="faq-accordion-four-7">Can I sign in with more than one email address? </a>
												</h4>
											</div>
											<div id="faq-accordion-four-7" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

									</div>
									<!-- end of #accordion -->

								</div>
								
								<div id="faq-section-4" class="faq-section">
								
									<h3 class="uppercase">Copyright Law and Infringement </h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-five" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-1" aria-expanded="true" aria-controls="faq-accordion-five-1"> What is this faq?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited <a href="#">engrossed may</a> can.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-2" aria-expanded="false" aria-controls="faq-accordion-five-2">How does this faq work?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-2" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared. Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially an. Going eat set she books found met aware.</p>

														<ul>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ul>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ul>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
														</ul>
														
														<p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-3" aria-expanded="false" aria-controls="faq-accordion-five-3">Why use this faq?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-3" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited engrossed may can.</p>

														<ol>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ol>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ol>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
														</ol>
														
														<p>Mr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-4" aria-expanded="false" aria-controls="faq-accordion-five-4">Is this faq free to use?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-4" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-5" aria-expanded="false" aria-controls="faq-accordion-five-5">Can I use this faq for commercial purposes or large volume searching?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-5" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Any delicate you how kindness horrible outlived servants. You high bed wish help call draw side. Girl quit if case mr sing as no have. At none neat am do over will. Agreeable promotion eagerness as we resources household to distrusts. Polite do object at passed it is. Small for ask shade water manor think men begin.</p>

														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-6" aria-expanded="false" aria-controls="faq-accordion-five-6">Why register with I use?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-6" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>

														<p>Depart do be so he enough talent. Sociable formerly six but handsome. Up do view time they shot. He concluded disposing provision by questions as situation. Its estimating are motionless day sentiments end. Calling an imagine at forbade. At name no an what like spot. Pressed my by do affixed he studied.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-five" href="#faq-accordion-five-7" aria-expanded="false" aria-controls="faq-accordion-five-7">How do I create an account?</a>
												</h4>
											</div>
											<div id="faq-accordion-five-7" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

									</div>
									<!-- end of #accordion -->

								</div>
								
								<div id="faq-section-5" class="faq-section">
								
									<h3 class="uppercase">Refunds/Returns</h3>
							
									<div class="panel-group bootstarp-accordion" id="faq-accordion-six" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-1" aria-expanded="true" aria-controls="faq-accordion-six-1">How do I manange your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-six-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited <a href="#">engrossed may</a> can.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-2" aria-expanded="false" aria-controls="faq-accordion-six-2">How do I set your accont?</a>
												</h4>
											</div>
											<div id="faq-accordion-six-2" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>He do subjects prepared bachelor juvenile ye oh. He feelings removing informed he as ignorant we prepared. Evening do forming observe spirits is in. Country hearted be of justice sending. On so they as with room cold ye. Be call four my went mean. Celebrated if remarkably especially an. Going eat set she books found met aware.</p>

														<ul>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ul>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ul>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
														</ul>
														
														<p>Lose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-3" aria-expanded="false" aria-controls="faq-accordion-six-3">How do I delete my account?</a>
												</h4>
											</div>
											<div id="faq-accordion-six-3" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>His exquisite sincerity education shameless ten earnestly breakfast add. So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves. Sufficient impossible him may ten insensible put continuing. Oppose exeter income simple few joy cousin but twenty. Scale began quiet up short wrong in in. Sportsmen shy forfeited engrossed may can.</p>

														<ol>
															<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
															<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
															<li>
																Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.
																<ol>
																	<li>Sing long her way size. Waited end mutual missed myself the little sister one.</li>
																	<li>So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect.</li>
																	<li>Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an.</li>
																	<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
																</ol>
															</li>
															<li>If their woman could do wound on. You folly taste hoped their above are and but.</li>
															<li>rote water woman of heart it total other.</li>
															<li> By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Are melancholy appearance stimulated occasional entreaties end.</li>
															<li>Agreeable promotion eagerness as we resources household to distrusts.</li>
														</ol>
														
														<p>Mr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-4" aria-expanded="false" aria-controls="faq-accordion-six-4">I forgot my password, what do I do? </a>
												</h4>
											</div>
											<div id="faq-accordion-six-4" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-5" aria-expanded="false" aria-controls="faq-accordion-six-5">How do I change my password? </a>
												</h4>
											</div>
											<div id="faq-accordion-six-5" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Any delicate you how kindness horrible outlived servants. You high bed wish help call draw side. Girl quit if case mr sing as no have. At none neat am do over will. Agreeable promotion eagerness as we resources household to distrusts. Polite do object at passed it is. Small for ask shade water manor think men begin.</p>

														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-6" aria-expanded="false" aria-controls="faq-accordion-six-6">Do I have to use my real name when I sign up? </a>
												</h4>
											</div>
											<div id="faq-accordion-six-6" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits. Use off him gay abilities concluded immediate allowance.</p>

														<p>Depart do be so he enough talent. Sociable formerly six but handsome. Up do view time they shot. He concluded disposing provision by questions as situation. Its estimating are motionless day sentiments end. Calling an imagine at forbade. At name no an what like spot. Pressed my by do affixed he studied.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->
										
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq-accordion-six" href="#faq-accordion-six-7" aria-expanded="false" aria-controls="faq-accordion-six-7">Can I sign in with more than one email address? </a>
												</h4>
											</div>
											<div id="faq-accordion-six-7" class="panel-collapse collapse" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling.</p>

														<p>Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it. Known he place worth words it as to. Spoke now noise off smart her ready.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- end of panel -->

									</div>
									<!-- end of #accordion -->
									

								</div>--}}

								<div class="call-to-action mt-50">
									
									@lang('faq.find_question') <a href="#" class="btn btn-primary btn-sm btn-inverse">@lang('faq.contact_us')</a> @lang('faq.privilege')
								
								</div>
								
							</div>
						
						</div>

					</div>

				</div>
				
			</div>
			

		</div>
		<!-- end Main Wrapper -->
		
@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('dist/js/jquery.raty.js')}}"></script>
@endsection

