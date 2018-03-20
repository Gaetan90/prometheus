{{ Form::open(array('route'=>'users.test2')) }}
                                                                                              <div class="form-group">
                                                                                                              <label for="email" class="cols-sm-2 control-label">Password</label>
                                                                                                              <div class="cols-sm-10">
                                                                                                                              <div class="input-group">
                                                                                                                                              <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                                                                                                                             
                                                                                                                                              {{ Form::text('password', '', array('placeholder'=>'Password', 'class'=>'form-control')) }}
                                                                                                                              </div>
                                                                                                              </div>
                                                                                              </div>
                                                                               {{ Form::close() }}
                                                                               </div>
                                                               </div>
                                               </div>
 
                   
                {{ Form::close() }}