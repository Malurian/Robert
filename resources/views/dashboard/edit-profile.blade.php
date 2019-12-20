@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Edit Profile</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-lg-4 col-xl-3">
							    <div class="card">
									<div class="card-header">
										<h3 class="card-title">My Profile</h3>
									</div>
									<div class="card-body p-4 bg-primary text-white">
										<form>
											<div class="row text-center">
												<div class="col-12">
													<span class="avatar brround avatar-xl" style="background-image: url(dashboard\assets/images/faces/male/16.jpeg)"></span>
												</div>
												<div class="col-12">
													<h4 class="mb-1 mt-2 ">{{ auth()->user()->name }}</h4>
													<p class="mb-0">Event {{ auth()->user()->user_type }}</p>
												</div>
											</div>
									    </form></div>
										<div class="card-body">
											<div class="form-group">
												<label class="form-label">User Name</label>
											<input type="text" class="form-control" name="example-text-input" value="{{ auth()->user()->name }}" placeholder="Name">
											</div>
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control" name="password" value="{{ auth()->user()->password }}" placeholder="••••••">
											</div>
											<div class="form-group">
											    <label class="form-label">About</label>
											    <textarea class="form-control" rows="2" placeholder="My Bio">{{ auth()->user()->about }}</textarea>
											</div>
											<div class="form-group">
												<label class="form-label">Website</label>
												<input class="form-control" placeholder="{{ auth()->user()->website }}">
											</div>
											<div class="form-footer">
												<button class="btn btn-secondary btn-block">Save</button>
											</div>
										</form>
									</div>
								</div>
							    <div class="card">
									<div class="card-body">
										<h6 class="card-title font-weight-bold">Support</h6>
										<p class="card-text">
										<div class="media-list">
										<div class="media">
											<div class="mediaicon bg-primary">
												<i class="fa fa-link" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5 ">
												<h6 class="mediafont text-dark mb-0">Websites</h6><a class="d-block" href="">{{ auth()->user()->website }}</a> <a class="d-block" href="">{{ auth()->user()->website }}</a>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->

										<!-- media -->
										<div class="media">
											<div class="mediaicon bg-secondary">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5">
												<h6 class="mediafont text-dark mb-0">Email Address</h6><a class="d-block" href=""> {{ auth()->user()->email }}</a>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<div class="media">
											<div class="mediaicon bg-info">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5">
												<h6 class="mediafont text-dark mb-0">Twitter</h6><a class="d-block" href="#">{{ auth()->user()->username }}</a>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
									</div>

									</div>
							    </div>
						    </div>

							<div class="col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-header"><h2 class="card-title">Edit profile</h2></div>
										<div class="card-body">
											<div class="e-profile">
												<div class="row">
													<div class="col-12 col-sm-auto mb-3">
														<div class="mx-auto img-2">
															<img src="dashboard\assets\images\faces\male\16.jpeg" alt="">
														</div>
													</div>
													<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
														<div class="text-center text-sm-left mb-sm-0">
															<div>
																<button class="btn btn-primary btn-block mt-5" type="button">
																	<i class="fa fa-fw fa-camera"></i>
																	<span>Change Photo</span>
																</button>
															</div>
															<button class="btn btn-secondary btn-block mt-2" type="button">
																<i class="fa fa-fw fa-camera"></i>
																<span>Remove Photo</span>
															</button>
														</div>
														<div class="text-center text-sm-right">
															<span class="badge badge-secondary">{{ auth()->user()->user_type }}</span>
															<div class="text-muted"><small>Member since: {{ auth()->user()->created_at->toFormattedDateString() }}</small></div>
														</div>
													</div>
												</div>

												<div class="tab-content pt-3">
													<div class="tab-pane active">
													<form class="form" method="post" action="{{ url('update') }}">
														@csrf	
														<div class="row">
																<div class="col">
																	<div class="row">
																		<div class="col">
																			<div class="form-group">
																				<label class="form-label">Full Name</label>
																				<input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" placeholder="Name">
																			</div>
																		</div>
																		<div class="col">
																			<div class="form-group">
																				<label class="form-label">Username</label>
																				<input class="form-control" type="text" name="username" value="{{ auth()->user()->username }}" placeholder="johnny.s" value=" Christopher">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col">
																			<div class="form-group">
																				<label class="form-label">Email</label>
																				<input class="form-control" name="email" type="text" value="{{ auth()->user()->email }}" placeholder="user@example.com">
																			</div>
																		</div>

																		<div class="col">
																			<div class="form-group">
																				<label class="form-label">Website</label>
																				<input class="form-control" name="website" placeholder="{{ auth()->user()->website }}">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col mb-3">
																			<div class="form-group">
																				<label class="form-label">About</label>
																				<textarea class="form-control" rows="2" name="about" placeholder="{{ auth()->user()->about }}"></textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
															  <div class="col-12 col-sm-6 mb-3">
																<div class="mb-2"><h2 class="card-title">Personal Info</h2></div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label class="form-label">Country</label>
																			<select name="country" id="select-countries" class="form-control custom-select">
																				<option value="{{ auth()->user()->country }}" data-data='{"image": "dashboard\assets/images/flags/br.svg"}'>{{ auth()->user()->country }}</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group ">
																			<label class="form-label">Date Of Birth</label>
																			<div class="row gutters-xs">
																				<div class="col-5">
																					<select name="user[month]" class="form-control custom-select">
																						<option value="">Month</option>
																						<option value="1">January</option>
																						<option value="2">February</option>
																						<option value="3">March</option>
																						<option value="4">April</option>
																						<option value="5">May</option>
																						<option selected="selected" value="6">June</option>
																						<option value="7">July</option>
																						<option value="8">August</option>
																						<option value="9">September</option>
																						<option value="10">October</option>
																						<option value="11">November</option>
																						<option value="12">December</option>
																					</select>
																				</div>
																				<div class="col-3">
																					<select name="user[day]" class="form-control custom-select">
																						<option value="">Day</option>
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4">4</option>
																						<option value="5">5</option>
																						<option value="6">6</option>
																						<option value="7">7</option>
																						<option value="8">8</option>
																						<option value="9">9</option>
																						<option value="10">10</option>
																						<option value="11">11</option>
																						<option value="12">12</option>
																						<option value="13">13</option>
																						<option value="14">14</option>
																						<option value="15">15</option>
																						<option value="16">16</option>
																						<option value="17">17</option>
																						<option value="18">18</option>
																						<option value="19">19</option>
																						<option selected="selected" value="20">20</option>
																						<option value="21">21</option>
																						<option value="22">22</option>
																						<option value="23">23</option>
																						<option value="24">24</option>
																						<option value="25">25</option>
																						<option value="26">26</option>
																						<option value="27">27</option>
																						<option value="28">28</option>
																						<option value="29">29</option>
																						<option value="30">30</option>
																						<option value="31">31</option>
																					</select>
																				</div>
																				<div class="col-4">
																					<select name="user[year]" class="form-control custom-select">
																						<option value="">Year</option>
																						<option value="2014">2014</option>
																						<option value="2013">2013</option>
																						<option value="2012">2012</option>
																						<option value="2011">2011</option>
																						<option value="2010">2010</option>
																						<option value="2009">2009</option>
																						<option value="2008">2008</option>
																						<option value="2007">2007</option>
																						<option value="2006">2006</option>
																						<option value="2005">2005</option>
																						<option value="2004">2004</option>
																						<option value="2003">2003</option>
																						<option value="2002">2002</option>
																						<option value="2001">2001</option>
																						<option value="2000">2000</option>
																						<option value="1999">1999</option>
																						<option value="1998">1998</option>
																						<option value="1997">1997</option>
																						<option value="1996">1996</option>
																						<option value="1995">1995</option>
																						<option value="1994">1994</option>
																						<option value="1993">1993</option>
																						<option value="1992">1992</option>
																						<option value="1991">1991</option>
																						<option value="1990">1990</option>
																						<option selected="selected" value="1989">1989</option>
																						<option value="1988">1988</option>
																						<option value="1987">1987</option>
																						<option value="1986">1986</option>
																						<option value="1985">1985</option>
																						<option value="1984">1984</option>
																						<option value="1983">1983</option>
																						<option value="1982">1982</option>
																						<option value="1981">1981</option>
																						<option value="1980">1980</option>
																						<option value="1979">1979</option>
																						<option value="1978">1978</option>
																						<option value="1977">1977</option>
																						<option value="1976">1976</option>
																						<option value="1975">1975</option>
																						<option value="1974">1974</option>
																						<option value="1973">1973</option>
																						<option value="1972">1972</option>
																						<option value="1971">1971</option>
																						<option value="1970">1970</option>
																						<option value="1969">1969</option>
																						<option value="1968">1968</option>
																						<option value="1967">1967</option>
																						<option value="1966">1966</option>
																						<option value="1965">1965</option>
																						<option value="1964">1964</option>
																						<option value="1963">1963</option>
																						<option value="1962">1962</option>
																						<option value="1961">1961</option>
																						<option value="1960">1960</option>
																						<option value="1959">1959</option>
																						<option value="1958">1958</option>
																						<option value="1957">1957</option>
																						<option value="1956">1956</option>
																						<option value="1955">1955</option>
																						<option value="1954">1954</option>
																						<option value="1953">1953</option>
																						<option value="1952">1952</option>
																						<option value="1951">1951</option>
																						<option value="1950">1950</option>
																						<option value="1949">1949</option>
																						<option value="1948">1948</option>
																						<option value="1947">1947</option>
																						<option value="1946">1946</option>
																						<option value="1945">1945</option>
																						<option value="1944">1944</option>
																						<option value="1943">1943</option>
																						<option value="1942">1942</option>
																						<option value="1941">1941</option>
																						<option value="1940">1940</option>
																						<option value="1939">1939</option>
																						<option value="1938">1938</option>
																						<option value="1937">1937</option>
																						<option value="1936">1936</option>
																						<option value="1935">1935</option>
																						<option value="1934">1934</option>
																						<option value="1933">1933</option>
																						<option value="1932">1932</option>
																						<option value="1931">1931</option>
																						<option value="1930">1930</option>
																						<option value="1929">1929</option>
																						<option value="1928">1928</option>
																						<option value="1927">1927</option>
																						<option value="1926">1926</option>
																						<option value="1925">1925</option>
																						<option value="1924">1924</option>
																						<option value="1923">1923</option>
																						<option value="1922">1922</option>
																						<option value="1921">1921</option>
																						<option value="1920">1920</option>
																						<option value="1919">1919</option>
																						<option value="1918">1918</option>
																						<option value="1917">1917</option>
																						<option value="1916">1916</option>
																						<option value="1915">1915</option>
																						<option value="1914">1914</option>
																						<option value="1913">1913</option>
																						<option value="1912">1912</option>
																						<option value="1911">1911</option>
																						<option value="1910">1910</option>
																						<option value="1909">1909</option>
																						<option value="1908">1908</option>
																						<option value="1907">1907</option>
																						<option value="1906">1906</option>
																						<option value="1905">1905</option>
																						<option value="1904">1904</option>
																						<option value="1903">1903</option>
																						<option value="1902">1902</option>
																						<option value="1901">1901</option>
																						<option value="1900">1900</option>
																						<option value="1899">1899</option>
																						<option value="1898">1898</option>
																						<option value="1897">1897</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label class="form-label">Mobile <span class="d-none d-xl-inline">No</span></label>
																			<input class="form-control" type="num" value="{{ auth()->user()->mobile }}" placeholder="Enter Mobile no">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-6 mb-3">
																<div class="mb-2"><h2 class="card-title">Change Password</h2></div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label class="form-label">Current Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label class="form-label">New Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label class="form-label">Confirm <span class="d-none d-xl-inline">Password</span></label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="float-right mt-0 mb-0">
															<button class="btn btn-secondary mr-3" type="submit">Cancel</button>
															<button class="btn btn-primary " type="submit">Update Profile</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- <div class="card">
									<div class="card-header">
										<h3 class="card-title">Add  Events And Upload Images</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead>
												<tr>
													<th>Event Name</th>
													<th>Date</th>
													<th>Duration</th>
													<th>Status</th>
													<th>Price</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="store.html" class="text-inherit">Untrammelled prevents </a></td>
													<td>28 May 2018</td>
													<td>3 months</td>
													<td><span class="status-icon bg-success"></span> Completed</td>
													<td>$5908</td>
													<td>
														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
													</td>
												</tr>
												<tr>
													<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
													<td>12 June 2018</td>
													<td>4 months</td>
													<td><span class="status-icon bg-danger"></span> On going</td>
													<td>$87</td>
													<td>
														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
													</td>
												</tr>
												<tr>
													<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
													<td>12 July 2018</td>
													<td>6 months</td>
													<td><span class="status-icon bg-warning"></span> Pending</td>
													<td>$23</td>
													<td>
														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
													</td>
												</tr>
												<tr>
													<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
													<td>14 June 2018</td>
													<td>2 months</td>
													<td><span class="status-icon bg-warning"></span> Pending</td>
													<td>$435</td>
													<td>
														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
													</td>
												</tr>
												<tr>
													<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
													<td>25 June 2018</td>
													<td>5 months</td>
													<td><span class="status-icon bg-success"></span> Completed</td>
													<td>$5,987</td>
													<td>
														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

														<a class="icon" href="javascript:void(0)"></a>
														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div> --}}
							</div>
						</div>

					</div>
				@endsection