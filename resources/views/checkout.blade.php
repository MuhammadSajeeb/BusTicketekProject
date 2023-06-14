@extends('layout')


@section('hero')
    	<!-- ======= Hero Section ======= -->
	<section id="" class="d-flex align-items-center">

		<div class="container">
			<div class="row">


			</div>
		</div>

	</section><!-- End Hero -->

@endsection


@section('main')
    <main id="main">

		<!-- ======= About Us Section ======= -->
		<section id="about" class="about results">
			<div class="container" data-aos="fade-up">
				<div class="selecteddest">
					<strong>
						 {{$trips->depart_from}} <i class="ti-arrow-right"></i> {{$trips->arrive_at}}
					</strong>
					<hr>
				</div>
				<div id="changedetail" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Change Details</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
							</div>
							<div class="modal-body">
								<form action="/result" method="post">
									<div class="form-group col-md-3">
										<label class="sr-only" for="inlineFormInputGroupUsername">Depart From</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="ti-location-pin"></i></div>
											</div>
											<input type="" id="deptdate" name="deptfrom"
												class="form-control js-example-basic-single" placeholder="Depart from"
												required="">
										</div>
									</div>

									<div class="form-group col-md-3">
										<label class="sr-only" for="inlineFormInputGroupUsername">Arrive From</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="ti-world"></i></div>
											</div>
											<input type="text" class="form-control" id="arriveat" name="arriveat"
												placeholder="Arrive at" required="">
										</div>
									</div>

									<div class="form-group col-md-3">
										<label class="sr-only" for="inlineFormInputGroupUsername">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="ti-calendar"></i></div>
											</div>
											<input type="text" name="traveldate" class="form-control" id="datepicker1"
												placeholder="Date" required="">
										</div>
									</div>

									<div class="form-group col-md-3">
										<div class="text-center sbuses"><input class="btnsubmit" type="submit"
												value="Search Buses" name="submit" /> </div>
									</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row content">
				<div class="col-lg-1">

					<p></p>

				</div>

				<div class="col-lg-10">

					<!-- data table start -->
					<div class="col-12 mt-5">
						<div class="card ">
							<div class="card-body">

								<div class="data-tables">

									<div class="modal-content ">
										<div class="modal-header">
											<h5 class="modal-title">Select Seat(s)</h5>

										</div>
										<div class="modal-body">
											<div class="col-md-12 mb-3">
												<div class="wrapper">
													<div class="contain">

														<div id="seat-map">
                                                            <div id="legend" style="display: inline-block;"></div>
															<div class="front-indicator">Front</div>

														</div>
														<div class="booking-details col-md-8">
															<div class="modal-body">
                                                                <form method="POST" action="/checkout"  id="passengerForm"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="trip_id" value="{{$trips->id}}"/>
                                                                    <div id="beforeThis" style="display: none;">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Contact Information </h4><br>
                                                                        </div>
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
{{--                                                                                <p style="background-color: #f5f50c; width: 28%; padding: 3px 8px;">Your ticket will be sent to these details</p>--}}
                                                                                <div class="form-row">

                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label for="validationCustom02">Email ID</label>

                                                                                        <input type="email" name="email" class="form-control"
                                                                                            id="timepicker1" placeholder="" required="" value="{{auth()->user()->email ?? ''}}">

                                                                                        <div class="valid-feedback">
                                                                                            Looks good!
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            Please select Depart date.
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label for="validationCustom02">Phone #</label>

                                                                                        <input type="phone" name="phone" class="form-control"
                                                                                            id="timepicker2" placeholder="+251-000-000000" required="" value="{{auth()->user()->phone ?? ''}}">

                                                                                        <div class="valid-feedback">
                                                                                            Looks good!
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            Please select Arrival time.
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <div class="custom-control custom-radio">
                                                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                                                class="custom-control-input" required>
                                                                                            <label class="custom-control-label" for="customRadio2">I have read,
                                                                                                understood and agree to the <a data-toggle="modal"
                                                                                                    data-target="#tercond" class="trmcon" href="#"> Terms and
                                                                                                    Condtions</a></label>

                                                                                        </div>
										                                            </div>
                                                                                    <div class="modal-footer align-items-between">
                                                                                        <button class="btn" style="background-color: #6e62a2; color:white;" type="submit" name="addticket" value="book"> Book Now</button>
{{--                                                                                        <button class="btn" style="background-color: #13a4de; color:white;" type="submit" name="addticket" value="pay"> Pay Now</button>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
															{{-- <button class="checkout-button">Checkout &raquo;</button> --}}

														</div>
													</div>
												</div>
											</div>

										</div>

									</div>

								</div>

								<div class="wrapper">
									<div class="container">


									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
				<!-- data table end -->
				<script type="text/javascript">
					function myFunction1() {
						var r = document.getElementById("myDIV1");
						if (r.style.display === "none") {
							r.style.display = "block";
						} else {
							r.style.display = "none";
						}
					}
				</script>

				</table>

			</div>

			</div>

			</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- Modal -->
		<div class="modal fade" id="tercond" tabindex="-1" role="dialog" aria-labelledby="tercond" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Terms and Condition</h5>
						<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					</div>
					<div class="modal-body">
						<section id="about" class="about">
							<div class="container" data-aos="fade-up">

								<div class="row content">
									<div class="col-lg-12">
										<p>
											These terms and conditions (collectively, hereinafter referred to as the
											"Terms") govern your access to and use of the website,
											www.ethiopianbooking.com and mobile applications that link to or reference
											these Terms ("Website"). Further, the Website is operated by FUTURE
											plc.(Company registration no:) (Hereinafter "ethiopianbooking.com")
											("Ethiopianbooking.com").</p>

										<p>The 'Seller' referred to in the entire Terms below is the local bus operator
											who is registered with the Website and whose inventory is listed on the
											Website.</p>
										<p>Please read these Terms carefully before using Website, which is an online
											marketplace' as per the applicable laws, as amended from time to time
											(hereinafter referred to as the "Online Marketplace"). Further, for the
											purpose of clarity, it is hereby stated that Website is not engaged in
											providing any services by itself but is a platform, which merely connects
											the business to customers.</p>
										<p>These Terms are an electronic record in terms of the applicable legislation.
											This electronic record is generated by a computer system and does not
											require any physical or digital signatures. By using the Website, you
											signify your agreement to be bound by these conditions.</p>
										<p>PLEASE NOTE THAT YOUR USE OF THE WEBSITE IN ANY WAY SIGNIFIES YOUR ACCEPTANCE
											TO OUR TERMS. By agreeing to these Terms, you also agree to our other
											Website policies; including but not limited to, (i) Privacy Policy, as
											amended from time to time; and (ii) Cookie Policy.</p>
										<p>The Users of the Website shall be deemed to have read, understood and
											expressly accepted these Terms, which shall govern the desired transaction
											of bus ticket booking/hotel reservations through the Website for all
											purposes, and shall be binding on the User. All rights and liabilities of
											the User and/or Website with respect to use of Website and the use of the
											bus ticket booking/hotel reservation facility ("Facility") provided by
											Website shall be restricted to the scope of this agreement.</p>
										<p>PLEASE NOTE THAT YOUR USE OF THE WEBSITE IN ANY WAY SIGNIFIES YOUR ACCEPTANCE
											TO OUR TERMS. By agreeing to these In addition to this Term, any other
											'terms of service' of the application-programming interface ("API") with
											which Ethiopianbooking.com may tie-up would form an integral part of this
											Agreement (hereinafter referred to as the "API Terms"). However, in the
											event of a conflict between such API Terms and this Agreement, the terms of
											this Agreement shall prevail.
											In addition to these Terms, any other 'terms of service' of the
											application-programming interface ("API") with which Ethiopianbooking.com
											may tie-up would form an integral part of this Agreement (hereinafter
											referred to as the "API Terms"). However, in the event of a conflict between
											such API Terms and these Terms, these Terms shall prevail.</p>
										<p>Both User and Website are individually referred as 'party' to the agreement
											and collective referred to as 'parties'.</p>
										<br>

										<h3><b>Terminology:</b></h3>
										<ol>
											<li> For the purpose of these Terms, wherever the context so requires "You"
												or "User" shall mean any natural or legal person who has agreed to
												become a buyer and/or availer of Facility being offered on the Website.
											</li>
											<li>For the purpose of these Terms, wherever the context so requires "You"
												or "User" shall mean any natural or legal person who has agreed to
												become a buyer and/or availer of Facility being offered on the Website.
											</li>

										</ol>

										<h3><b>Our Website:</b></h3>
										<p>Ethiopianbooking.com wishes to clarify that it is only an online marketplace
											which merely connects the business to customers. In light of the foregoing,
											Ethiopianbooking.com wishes to clarify the following:</p>
										<ol>
											<li> The Website is a marketplace, which lists the inventory of local
												operators who are registered with the Website, but does not own the
												services per se. Hence, the role of the Website is to connect the You
												and ‘seller’. Further, the Website provides customer support in the
												event of complaints against bus operators, cancellation of bus ticket
												bookings, refunds and charge backs (responsibilities further mentioned
												in Clause 9, point 6).</li>
											<li>In light of the foregoing, the Website shall assist you with any
												concerns and/or claims you may have in relation to the product being
												sold/services being offered on the Website in accordance with the
												applicable laws, and connect you with ‘seller’. However, you may always
												choose to pursue any such action as you may deem necessary against
												‘seller’/the Website. In case of any deficiency of products/services,
												You agree to pursue any such action arising from such deficiency of
												products/services against ‘seller’ and not the Website. </li>
											<li>You further agree and acknowledge that the Website cannot guarantee to
												or control in any manner any transactions on the Website. Accordingly,
												the contract of sale of products/services on the Website shall be a
												strictly bipartite contract between you and ‘seller’ listed on the
												Website. Any related issue; you can direct contact our customer support
												accordingly. </li>
											<li>You further agree and acknowledge that all the 'discounts/coupons (if
												any)' on the Website/prices at which the products/services are being
												sold by the bus operator/hotel on the Website is merely an "invitation
												to treat" in accordance with the applicable laws and shall not be
												construed to be an "offer" in accordance with the applicable laws.
												Hence, in light of the foregoing, when you agree to purchase any product
												of the 'seller' listed on the Website, that would be termed as a 'valid
												offer' under the applicable laws and after doing so it is upon the
												'seller' to accept the said 'valid offer' or reject the 'valid offer'.
												In this regard, note that if the 'seller' accepts the said 'valid
												offer', only then would it be tantamount to be a 'valid contract' as per
												the applicable laws. </li>

										</ol>

										<h3><b>User Account:</b></h3>
										<p>Ethiopianbooking.com may offer the option of opening user accounts on the
											Website by the End-User. The user account may be linked to the User's
											email-id or phone number or both. For use of the Website by User, either by
											registering an account with Ethiopianbooking.com or using the Website as
											guest (unregistered user), the User agrees to the following:</p>
										<ol>
											<li> You are responsible for maintaining the confidentiality of your account
												and password and for restricting access to your computer to prevent
												unauthorized access to your account when You use this Website by
												registering an account with Ethiopianbooking.com.</li>
											<li>By using the Website, either as a guest user or registered user, You
												authorize Ethiopianbooking.com and its agents to access third party
												sites, including that of banks and other payment gateways, designated by
												the bank or on the bank's behalf for retrieving requested information
												for processing of a customer generated transaction on the Website. </li>
											<li>In the event that You use the Website through a registered account, You
												agree to accept responsibility for all activities that occur under your
												account or password. </li>
											<li>In the event that You use the Website through a registered account, You
												should take all necessary steps to ensure that the password is kept
												confidential and secure and should inform us immediately if you have any
												reason to believe that your password has become known to anyone else, or
												if the password is being, or is likely to be, used in an unauthorized
												manner. Please ensure that the details you provide us with are correct
												and complete and inform us immediately of any changes to the information
												that you provided when registering. </li>
											<li>We will not be responsible for screening, censoring or otherwise
												controlling transactions, including whether the transaction is legal and
												valid as per the laws of the land of the User. </li>
											<li>You warrant that you will abide by all such additional procedures and
												guidelines, as modified from time to time, in connection with the use of
												Website. You shall also be liable to comply with all applicable laws and
												regulations regarding use of Website with respect to the jurisdiction
												concerned for each transaction. </li>
											<li>Website may be used for personal and non-commercial purposes only.
												Therefore, You are not allowed to re-sell, deep-link, use, copy, monitor
												(e.g. spider, scrape), display, download or reproduce any content or
												information, software, products or Facility available on Website for any
												commercial or competitive activity or purpose. </li>
											<li>Ethiopianbooking.com reserves the right to refuse access to Website,
												terminate accounts, remove or edit content at any time without notice if
												we have reasonable belief that your account is being used for
												unauthorized purposes.</li>

										</ol>

										<h3><b>Membership Eligibility:</b></h3>

										<ol>
											<li>Use of the Website is available only to persons who can form legally
												binding contracts under other applicable laws. Persons who are
												"incompetent to contract" within the meaning of the applicable laws are
												not eligible to use the Website. If you are a minor, you shall not
												register as a User of the Website and shall not transact on or use the
												Website.</li>
											<li>As a minor if you wish to use or transact on Website, such use or
												transaction may be made by your legal guardian or parents on the
												Website. We reserve the right to terminate your membership and/or refuse
												to provide you with access to the Website if it is discovered that you
												are a minor or incompetent to contract according to the laws applicable
												to you.</li>
										</ol>

										<h3><b>Privacy:</b></h3>
										<p>By agreeing to these Terms, you shall be bound by the following policies of
											the Website:</p>
										<ol>
											<li>The 'Privacy Policy' of Website; and</li>
											<li>The 'Cookie Policy' of Website.</li>
										</ol>

										<h3><b>Links:</b></h3>

										<ol>
											<li>This Website may contain links to websites maintained by third parties
												("External Sites"). These External Sites are provided for user's
												reference and convenience only. We do not operate, control or endorse in
												any respect such External Sites or their content. User assumes sole
												responsibility for use of these External Sites and is therefore, advised
												to examine the terms and conditions of those External Sites carefully.
											</li>
											<li>You must not link to this Website without obtaining the prior written
												approval of Ethiopianbooking.com. Use of any automated screen capture or
												screen scraping technologies to obtain information from this Website
												without the prior written approval of Ethiopianbooking.com is an
												infringement of our intellectual property rights.</li>
										</ol>

										<h3><b>Usage Conduct:</b></h3>

										<ol>
											<li>You acknowledge that you only have a limited right merely to use the
												Website and that you have no right to modify any part of the Website or
												reproduce, copy, distribute, sell, resell or access the Facility for any
												other commercial purposes.</li>
											<li>You are also under an obligation to use this Website for reasonable and
												lawful purposes only, and shall not indulge in any activity that is not
												envisaged in these Terms. You shall use this Website and Facility and
												any products/services purchased through it, for personal, non-commercial
												use only and shall not re-sell the same to any other person.</li>
											<li>You may not use any meta tags or any other hidden text utilizing the
												Ethiopianbooking.com/Website or its affiliates' names or trademarks
												without the express written consent of Ethiopianbooking.com / Website
												and / or its affiliates, as applicable.</li>
											<li>You must not use the Website for any of the following:

												<ol>
													<li>
														for fraudulent purposes, or in connection with a criminal
														offense or other unlawful activity; and
													</li>
													<li>to send, use or reuse any material that does not belong to you;
														or material that is illegal, offensive (including but not
														limited to material that is sexually explicit content or which
														promotes racism, bigotry, hatred or physical harm), deceptive,
														misleading, abusive, indecent, harassing, blasphemous,
														defamatory, libelous, obscene, pornographic, pedophilic or
														menacing; ethnically objectionable, disparaging or in breach of
														copyright, trademark, confidentiality, privacy or any other
														proprietary information or right; or is otherwise injurious to
														third parties; or relates to or promotes money laundering or
														gambling; or is harmful to minors in any way; or impersonates
														another person; or threatens the unity, integrity, security or
														sovereignty of Singapore or friendly relations with foreign
														States; or objectionable or otherwise unlawful in any manner
														whatsoever; or which consists of or contains software viruses,
														political campaigning, commercial solicitation, chain letters,
														mass mailings or any "spam" to cause annoyance, inconvenience or
														needless anxiety.</li>
												</ol>
											</li>
										</ol>

										<h3><b>Communications:</b></h3>

										<ol>
											<li>When you use the Website or send emails or other data, information or
												communication to us, you agree and understand that you are communicating
												with us through electronic records and you consent to receive
												communications via electronic records from us periodically and as and
												when required</li>
											<li>We may communicate with you by email or by such other mode of
												communication, electronic or otherwise.</li>
										</ol>

										<h3><b>Disclaimer of Warranties and Liability:</b></h3>

										<ol>
											<li>This Website, the Facility, products/services (including but not limited
												to software) included or otherwise made available to you through this
												Website are provided on "as is" and "as available" basis without any
												representation or warranties, express or implied except otherwise
												specified in writing by Ethiopianbooking.com or on the Website.</li>
											<li>Without prejudice to the forgoing paragraph, Website does not warrant
												that:

												<ol>
													<li>
														Website will be constantly available, or available at all; or
													</li>
													<li>The information on this Website is complete, true, accurate or
														non-misleading.</li>
													<li>Ethiopianbooking.com will not be liable to you in any way or in
														relation to the contents of, or use of, or otherwise in
														connection with, the Website. The Website does not warrant that
														this Site; information, content, materials, product (including
														software), Facility or services included on or otherwise made
														available to you through the Website; their servers; or
														electronic communication sent from us are free of viruses or
														other harmful components, despite our best efforts to prevent
														these incidents.</li>
													<li>You may be required to enter a valid phone number while placing
														an order or transacting on the Website. By registering your
														phone number with us, you consent to be contacted by us for the
														purposes of the transaction on the Website.</li>
													<li>We will not use your personal information to initiate any
														promotional phone calls or sms.</li>
													<li>For the purpose of booking bus tickets through the Website, we
														warrant that we shall be responsible for the following
														activities:

														<ol>
															<li>Issuing a valid ticket (a ticket that will be accepted
																by the bus operator) for its' network of bus operators;
																and</li>
															<li>Providing customer support in the event of complaints
																against bus operators, cancellation of bus ticket
																bookings, refunds and chargebacks.</li>
															<li>Sharing information with the customers in case of any
																delay / inconvenience.</li>
															<p>However, We DO NOT take any liability for the following:
															</p>
															<li>The bus operator's bus not departing/reaching on time
															</li>
															<li>The bus operator's employees being rude;</li>
															<li>The bus operator's bus seats etc not being up to the
																customer's expectation;</li>
															<li>The bus operator canceling the trip due to unavoidable
																reasons as described in the following clauses;</li>
															<li>The baggage of the customer getting lost/stolen/damaged;
															</li>
															<li>The bus operator changing a customer's seat at the last
																minute to accommodate a lady / child;</li>
															<li>The customer waiting at the wrong boarding point (please
																call the bus operator to find out the exact boarding
																point if you are not a regular traveler on that
																particular bus);</li>
															<li>The bus operator changing the boarding point and/or
																using a pick-up vehicle at the boarding point to take
																customers to the bus departure point; and</li>
															<li>The bus used for the journey does not fit the
																description given to the User.</li>
														</ol>
													</li>
												</ol>
											</li>
										</ol>

										<h3><b>Payment:</b></h3>
										<ol>
											<li>By the use of any of the payment method/s available on the Website by
												You, Ethiopianbooking.com shall not be responsible for nor assume any
												liability, whatsoever, in respect of any loss or damage arising directly
												or indirectly to you due to any of the following:
												<ol>
													<li>Lack of authorization for any transaction/s; or</li>
													<li>Exceeding the preset limit mutually agreed by You and your bank
														or credit card company; or</li>
													<li>Any payment issues arising out of the transaction; or</li>
													<li>Decline of transaction for any other reason/s.</li>
												</ol>

											</li>
											<li>Please note that:
												<ol>
													<li>Transactions, transaction price and all commercial terms such as
														delivery, dispatch of products and/or services are as per
														principal to principal bipartite contractual obligations between
														You and bus operator and payment facility is merely used by You
														and bus operator to facilitate the completion of the
														transaction. Use of the payment facility shall not render us
														liable or responsible, directly or indirectly, for the
														non-delivery, non-receipt, non-payment, damage, breach of
														representations and warranties, or fraud as regards the products
														and/or services listed on the Website.</li>
													<li>You have specifically authorized Ethiopianbooking.com or its
														service providers to collect, process, facilitate and remit
														payments and/or the transaction price electronically. Your
														relationship with Ethiopianbooking.com is on a principal to
														principal basis and by accepting these Terms you agree that
														Ethiopianbooking.com is an independent contractor for all
														purposes, and does not have control of or liability for the
														products or services that are listed on the Website that are
														paid for by using the payment facility. Ethiopianbooking.com
														does not guarantee the identity of any User nor does it ensure
														that You or the bus operator will complete a transaction.</li>
													<li>You understand, accept and agree that the payment facility
														provided through any third party on the Website is neither a
														banking nor financial service but is merely a platform providing
														an electronic, automated online electronic payment collection
														and remittance facility for the transactions on the Website
														using the existing authorized banking infrastructure and credit
														card payment gateway networks. Further, by providing the payment
														facility through the Website, Ethiopianbooking.com is neither
														acting as trustees nor acting in a fiduciary capacity with
														respect to the transaction or the transaction price.</li>
													<li>Upon cancellation of previously booked bus tickets on the
														Website, the refund amount (less relevant deductions) shall be
														credited to the User's bank account/credit card provided this
														mode remains valid within 7-10 working days.</li>
												</ol>
											</li>
										</ol>
										<ol>
											<h3><b>Ethiopianbooking.com Wallet:</b></h3>
											<p>Ethiopianbooking.com may provide, at its sole discretion, the facility to
												transact through Ethiopianbooking.com registered account to its Users in
												the following manner:</p>
											<li>
												Ethiopianbooking.com may, at its sole discretion, from time to time,
												offer promotional incentives to Users with non-transferable promotional
												points ("Promotional cash"). These points will be reflected in their
												Ethiopianbooking.com registered account.
											</li>
											<li>User agrees that usage of Promotional cash may be subjected to specific
												terms and conditions of promotional offer(s), as may be notified by
												Ethiopianbooking.com from time to time.</li>
											<li>Except as otherwise provided, the Promotional cash can only be utilized
												on the base fare (excluding all applicable taxes and charges) for bus
												ticket booking(s) made on the Website. The Promotional Cash can only be
												used to redeem up to certain % value, as determined by
												Ethiopianbooking.com solely, of the said base fare of the bus ticket
												booking(s) made on the Website for a single transaction.</li>
											<li>In case, User fails to enter requisite details for redeeming the
												Promotional cash, while making a bus ticket booking, the User shall not
												be entitled to any benefit of such Promotional Cash. Promotional Cash
												credited to Ethiopianbooking.com registered account of User are non-
												cashable and non- transferable.</li>
											<li>The Promotional cash once used shall be exhausted and in case of
												cancellation of the relevant bus ticket booking shall not be credited
												back to Ethiopianbooking.com registered account of User.</li>
											<li>The Promotional cash have limited validity from the date it is credited
												to the Ethiopianbooking.com registered account of a User, post which
												such Promotional Cash may lapse and its benefits shall not be available
												for User.</li>
											<br>
											<p>These terms pertaining to usage and applicability of Promotional Cash are
												subject to change at the discretion of Ethiopianbooking.com without any
												communication or notification to User.</p>

										</ol>

										<ol>
											<h3><b>Carriage Policy:</b></h3>
											<li>You are responsible for making sure that your travelling date, time and
												destination are correct before booking/reserving using the Facility or
												when you select to confirm your ticket purchase from the internet
												ticketing system. Please check our cancellation Policy available on the
												Website for details about cancellation and refunds.</li>
											<li>You are responsible to be on board the bus reasonably in advance before
												departure time. We are not liable if you fail to be on board the bus by
												the time the bus departs.</li>
											<li>The bus operators reserve the right to refuse you and your luggage from
												carriage on the bus for whatsoever reason that we deem justified in
												reasons, including but not limited to:

												<ol>
													<li>Carrying of contraband, illegal substances, fragile or
														oversize/overweight luggage, unruly behavior, drunkenness or any
														other behavior that we deem as affecting other passengers'
														comfort or safety.</li>
													<li>You are unable to produce valid-id while travelling.</li>
													<li>The payment of your fare is fraudulent;</li>
													<li>The booking of your seat has been done fraudulently or
														unlawfully or has been purchased from a person not authorized by
														us;</li>
													<li>The credit card by which you paid for the fare has been reported
														lost or stolen;</li>
													<li>The itinerary or booking or confirmation slip is counterfeit or
														fraudulently obtained;</li>
													<li>The itinerary has been altered by anyone other than us or our
														authorized agent, or has been mutilated (in which case we
														reserve the right to retain such documentation);</li>
													<li>You are unable to produce a valid and legible boarding ticket
														for the intended travel. The boarding ticket constitutes as the
														prima facie evidence of the contract of carriage between us and
														the boarding ticket holder;</li>
													<li>You are deemed medically unfit to travel and may pose a health
														threat to other passengers on board at the absolute discretion
														of Ethiopianbooking.com;</li>
													<li>You fail to arrive on time to board before the time of departure
														or fail to board the coach by the time the bus departs.</li>
													<li>If the bus operator has refused to carry you or choose to remove
														you from carriage as per the reasons abovementioned, we reserve
														the right to cancel the unused ticket and you will not be
														entitled to further carriage or refund of fare. We will not be
														liable for the consequential or incidental loss, damage, cost,
														or fee you may incur with the refusal of carriage.</li>
													<li>Children below age twelve (12) will not be accepted for carriage
														unless they are accompanied by an adult.</li>
													<li>The bus operators reserve the right to reschedule, cancel,
														and/or delay any trips and substitute other buses for reasons
														deem necessary to do so.</li>
													<li>You are responsible to ensure that valid and necessary travel
														documents, including the relevant passports, valid visas and/or
														identification, are carried with you for the journey. If you are
														denied entry/exit, held up at the immigration for the country
														you are travelling to, from or over, we will not be held
														responsible for the mentioned and reserve the right to continue
														the journey. We are not responsible for the consequential or
														incidental loss, cost, and fee incurred by you as a result of
														this (see Visitors' Entry regarding further information on
														travel documents, regulations and requirements).</li>
												</ol>
											</li>

										</ol>
										<ol>
											<h3><b>Immigration:</b></h3>
											<p>Ethiopianbooking.com is not responsible for any delays at immigration
												checkpoints. It is the passenger's responsibility to bring along valid
												travel document and to comply with customs requirements</p>
										</ol>
										<ol>
											<h3><b>Intellectual Property Rights:</b></h3>
											<li>Content included on the Website, such as text, graphics, logos, button
												icons, images, audio clips, digital downloads, data compilations, and
												software, is the property of Website, its affiliates or its content
												suppliers and is protected by Singapore and international copyright,
												authors' rights and database right laws.</li>
											<li>The compilation of all content on this Website is the exclusive property
												of Website and its affiliates and is protected by laws of Singapore and
												international copyright and database right laws. All software used on
												this Website is the property of Ethiopianbooking.com, its affiliates or
												its software suppliers and is protected by Singapore and international
												copyright and author' rights laws.</li>
											<li>You may not systematically extract/or re-utilize parts of the contents
												of the Website without our express written consent. In particular, you
												may not utilize any data mining, robots, or similar data gathering and
												extraction tools to extract (whether once or many times) for
												re-utilization of any substantial parts of this Website, without
												Ethiopianbooking.com's express written consent. You may also not create
												and/or publish your own database that features substantial (eg: prices
												and product listings) parts of the Website without Rebus's express
												written consent.</li>
											<li>Our Trademarks at various Jurisdictions and you cannot use the trademark
												for commercially exploiting your interests without our express
												permission. We reserve our right to initiate legal proceedings if we
												discover any infringement of our intellectual property rights.</li>
										</ol>
										<ol>
											<h3><b>Grievance Officer:</b></h3>
											<p>In case of any consumer grievance, the End-User may contact
												Ethiopianbooking.com on the email id provided below:
												support@ethiopianbooking.com.
											</p>
										</ol>
										<ol>
											<h3><b>Indemnity and Release:</b></h3>
											<ol>
												<li>You shall indemnify and hold harmless Website, Ethiopianbooking.com,
													its subsidiaries, affiliates and their respective officers,
													directors, agents and employees, from any claim or demand, or
													actions including reasonable attorney's fees, made by any third
													party or penalty imposed due to or arising out of your breach of
													these Terms or any document incorporated by reference, or your
													violation of any law, rules, regulations or the rights of a third
													party.</li>
												<li>You hereby expressly release Website/Ethiopianbooking.com or any of
													its affiliates or officers and representatives from any cost,
													damage, liability or other consequence of any of the
													actions/inactions of the vendors and specifically waiver any claims
													or demands that you may have in this behalf under any statute,
													contract or otherwise.</li>
											</ol>
										</ol>

										<ol>
											<h3><b>Losses:</b></h3>

											<p>We will not be responsible for any loss (including loss of profits,
												revenue, contracts, anticipated savings, data, goodwill or wasted
												expenditure) and any other indirect or consequential loss to You when
												You commenced using the Website.</p>

										</ol>
										<ol>
											<h3><b>Governing law and Jurisdiction:</b></h3>

											<p>These Terms are governed by and shall be construed in accordance with the
												laws of ETHIOPIA. The courts in ETHIOPIA shall have exclusive
												jurisdiction in respect of any disputes arising out of or in connection
												with these Terms</p>

										</ol>

										<ol>
											<h3><b>Suspension, Termination or Cancellation</b></h3>

											<p>Website may suspend, cancel or terminate your account registered with us,
												with or without prior notice, if we believe in good faith that you have
												breached any of these Terms or any other terms or policies referred to
												in these Terms.</p>
											<p>ethiopianbooking.com reserves the right, at its sole discretion, to
												accept, hold and/or cancel any reservation of bus tickets made by the
												User on the ethiopianbooking.com website, ethiopianbooking.com mobile
												website and ethiopianbooking.com mobile apps, which is deemed to be
												fraudulent or suspicious by ethiopianbooking.com.</p>
											<p>ethiopianbooking.com will endeavor to inform the User in the event of
												cancellation of reservation, owing to fraud or suspicious activity, to
												the best of its capacity, but shall not be liable for a failure to
												communicate such cancellation to the User.
											</p>

										</ol>
										<ol>
											<h3><b>Amendment / Modification:</b></h3>
											<p>Ethiopianbooking.com reserves the right to modify these Terms at any time
												with or without any further notice(s) by uploading the revised Terms on
												the Website and it is Your duty to keep yourself aware of the revisions
												to the Terms of the Website.</p>
										</ol>
										<ol>
											<h3><b>Limitation Of Liability:</b></h3>
											<p>THE WEBSITE/ETHIOPIANBOOKING.COM WILL NOT BE LIABLE FOR ANY DAMAGES OF
												ANY KIND, INCLUDING WITHOUT LIMITATION DIRECT, INDIRECT, INCIDENTAL,
												PUNITIVE, AND CONSEQUENTIAL DAMAGES, ARISING OUT OF OR IN CONNECTION
												WITH THE TERMS, WEBSITE, THE FACILITY, TRANSACTION PROCESSING SERVICE,
												INABILITY TO USE THE FACILITY OR THE TRANSACTION PROCESSING SERVICE, OR
												THOSE RESULTING FROM ANY SERVICES PURCHASED OR OBTAINED OR MESSAGES
												RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH THE WEBSITE, BEYOND THE
												VALUE OF THE LAST TRANSACTION CARRIED OUT BY THE END-USER THROUGH THE
												SITE.</p>
										</ol>
										<ol>
											<h3><b>Miscellaneous</b></h3>
											<li>The Parties acknowledge and accept that electronic format shall be
												deemed an acceptable means of communication for the purposes of these
												Terms.</li>
											<li>These Terms constitute the complete and entire agreement between the
												Parties on the subject of 'terms of usage of the Website' (save and
												except the other policies and terms referred to in these Terms) and
												shall supersede any and all other prior understandings, commitments,
												representations or agreements, whether written or oral, between the
												Parties to these Terms.</li>
											<li>If any provision of these Terms shall be found by any court or
												administrative body of competent jurisdiction to be invalid or
												unenforceable, such invalidity or enforceability shall not affect the
												other provisions of these Terms, which shall remain in full force and
												effect.</li>
											<li>In no event will any delay, failure or omission (in whole or in part) in
												enforcing, exercising or pursuing any right, power, privilege, claim or
												remedy conferred by or arising under these Terms or by law, be deemed to
												be or construed as a waiver of that or any other right, so as to bar the
												enforcement of that, or any other right, power privilege, claim or
												remedy, in any other instance at any time or times subsequently.</li>
											<li>ethiopianbooking.com coupon codes can be used by the User a maximum of
												two transactions in a 7 calendar days.</li>
										</ol>

									</div>

								</div>

							</div>
						</section><!-- End About Us Section -->
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

					</div>
					</form>
				</div>
			</div>
		</div>
		</div>

	</main><!-- End #main -->
@endsection


@section('script')
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="{{asset('assets/vendor/seatmap/jquery.seat-charts.js')}}"></script>
	<script>
		var firstSeatLabel = 1;
		$(document).ready(function() {
			var $cart = $('#selected-seats'),
				$counter = $('#counter'),
				$total = $('#total'),
				sc = $('#seat-map').seatCharts({
					map: [
						'ff___',
						'ff_ff',
						'ff_ff',
						'ff_ff',
						'ff_ff',
                        'ff_ff',
                        'ff_ff',
                        'ff___',
                        'ff___',
						'ff_ff',
						'ff_ff',
						'ff_ff',
                        'ff_ff',
                        'ff_ff',
						'fffff',
					],
					seats: {
						f: {
							price: <?php echo $trips->price; ?>,
							classes: 'first-class', //your custom CSS class
							category: 'First Class'
						},
					},
					naming: {
						top: false,
						getLabel: function(character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend: {
						node: $('#legend'),
						items: [
							['f', 'available', 'Available Seats'],
							['f', 'unavailable', 'Already Booked']
						]
					},
					click: function() {
						if (this.status() == 'available') {
							//let's create a new <li> which we'll add to the cart items
							$('<li>' + ' Seat # ' + this.settings.label + ': <b>$' +
									this.data().price +
									'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
								.attr('id', 'cart-item-' + this.settings.id)
								.data('seatId', this.settings.id)
								.appendTo($cart);


							/*
							 * Lets update the counter and total
							 *
							 * .find function will not find the current seat, because it will change its stauts only after return
							 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
							 */
							$counter.text(sc.find('selected').length + 1);
							$total.text(recalculateTotal(sc) + this.data().price);

                            addPassenger(this.settings.label,$counter.text(sc.find('selected').length));

							return 'selected';

						} else if (this.status() == 'selected') {
							//update the counter
							$counter.text(sc.find('selected').length - 1);
							//and total
							$total.text(recalculateTotal(sc) - this.data().price);
							//remove the item from our cart
							$('#cart-item-' + this.settings.id).remove();
                            $('#passanger-'+this.settings.label).remove();
							//seat has been vacated
							return 'available';
						} else if (this.status() == 'unavailable') {
							//seat has been already booked
							return 'unavailable';
						} else {
							return this.style();
						}
					}
				});
			//this will handle "[cancel]" link clicks
			$('#selected-seats').on('click', '.cancel-cart-item', function() {

				//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
				sc.get($(this).parents('li:first').data('seatId')).click();
			});
			//let's pretend some seats have already been booked
			sc.get(<?php echo json_encode($seat_values);?>).status('unavailable');
		});

		function recalculateTotal(sc) {
			var total = 0;
			//basically find every selected seat and sum its price
			sc.find('selected').each(function() {
				total += this.data().price;
			});
			return total;
		}
	</script>

    <script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
				'.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>

    <script>
        function addPassenger(seatNum,selected){

            x=selected.length;
            $('#beforeThis').before( `
                <div class="form-row" id="passanger-`+seatNum+`">
                    <div class="col-md-12 mb-3">
                        <strong>Passenger `  +`</strong>
                        <label for="validationCustom02">Full Name</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            placeholder="" value="{{auth()->user()->name}}" required="" name="name[]">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please enter Full name.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="gender">Gender</label><br>

                        <select name="gender[]" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Age</label>

                        <input type="number" name="age[]" class="form-control"
                            id="" placeholder="" required="">

                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please Enter valid age
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Seat #</label>

                        <input type="text" name="seat_no[]" class="form-control"
                            id="deptfrom" placeholder="" required="" value="`+seatNum+`" readonly />
                    </div>




                    <div class="col-md-4 mb-3" form-group>
                        <label for="validationCustom02">Luggage</label>

                        <input type="number" name="luggage[]" class="form-control is-valid"
                            id="luggage" placeholder="" required="">

                        <div class="valid-feedback">
                            Luggage more than `+<?php echo $trips->allowable_luggage; ?>+ ` costs `+<?php echo $trips->extra_luggage_fee; ?>+ ` BDT each.
                        </div>
                        <div class="invalid-feedback">
                            Please enter valid name.
                        </div>
                    </div>
            ` );

            $('#beforeThis').css('display','block');
        }
    </script>
@endsection
