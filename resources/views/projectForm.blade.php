@extends('app')

@section('content')
<div class="row">
        <h2>Start building your project!</h2>
</div>

<div class="container">
  <div class="col col-md-2">
  </div>
  <div class="col col-md-8" id="formbound">
    <form class="form-horizontal" action="{{url('projectForm')}} " method="POST" id="form1">
    {!! csrf_field() !!} 
      <div class="form-group">
        <label for="projecttitle" class="col-sm-3 control-label">Project title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="projecttitle" placeholder="60/60">
          <div class="row">
            <p id="requirement">Your project title and blurb should be simple, specific, and memorable. Our search tools run through these sections of your project, so be sure to incorporate any key words here!<br>These words will help people find your project, so choose them wisely! Your name will be searchable too.</p>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="Short blurb" class="col-sm-3 control-label">Short blurb</label>
        <div class="col-sm-9">
          <textarea type="comment" class="form-control" id="Short blurb" placeholder="135/135"></textarea>
          <div class="row">
            <p id="requirement">If you had to describe what you're creating in one tweet, how would you do it?</p>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="Category" class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
        <select class="form-control" id="Category">
          <option value=1>Music</option>
          <option value=2>Film</option>
          <option value=3>Dance</option>
          <option value=4>Food</option>
          <option value=5>Technology</option>
          <option value=6>Publishing</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="projectlocation" class="col-sm-3 control-label">Project location</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="projectlocation" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label for="fundingDuration" class="col-sm-3 control-label">Funding duration</label>
        <div class="col-sm-9">
          <div class="radio">
           <label>
           <input type="radio" name="numofdays" id="numofdays" value="num">Number of days
           <input type="text" id="fundingDuration" placeholder="30 days or less"></label>
           </label>
           <label>
           <input type="radio" name="endDate" id="endDate" value="endDate">End on date & time
           <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>


           </label>
          </div>
          <p id="requirement">We recommend setting a funding duration of 30 days or less. Shorter durations tend to have higher success rates. Once your project has launched, it won’t be possible to change your funding duration</p>
        </div>
      </div>

      <div class="form-group">
        <label for="fundingGoal" class="col-sm-3 control-label">Funding goal</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="fundingGoal" placeholder="">
          <p id="requirement">Your funding goal should be the minimum amount needed to complete the project and fulfill (and ship!) all rewards. Because funding is all-or-nothing, you can always raise more than your goal but never less. Once your project has launched, it will not be possible to change your funding goal.<br>
          If your project is successfully funded, the following fees will be collected from your funding total: Kickstarter’s 5% fee, and payment processing fees (between 3% and 5%). If funding isn’t successful, there are no fees.
          </p>
        </div>
      </div>

      <div class="row tm5">
        <div class="col-xs-2 col-md-offset-5">
            <input type="submit" name="action" value="create project" />                        
        </div>
      </div>

    </form>




  </div>

  </div>
  <div class="col col-md-2">
  </div>

</div>
@stop
