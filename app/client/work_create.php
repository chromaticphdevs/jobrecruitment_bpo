<?php require_once('../dependencies.php')?>
<?php require_once('functions/main.php')?>

<?php
  if(postRequest('createWorkExperience')) {
      
      if(createWorkExperience($_POST)) {
        Flash::set("{$_POST['work_field']} has been added to your work");
        return redirect('profile.php');
      }
  }
?>

<?php $user = new Profile();?>

<?php
  $personal = $user->getPersonal();
  $education = $user->getEducation();
  $workExperiences = $user->getWorkExperience();
  $skills   = $user->getSkills();

  $jobApplications = getUserApplications($user->getId());

  $workHistory     = new WorkHistory($user->getId());
  $jobFields     = getJobFields();
?>

<?php build('content') ?>

<div id="wrapper">
  <div style="margin-top: 50px;"></div>

  <div class="col-md-5">
    <div class="card">
      <div class="card-header">
        <h4>Works</h4>
      </div>

      <div class="card-body">
        <form method="post">
              <legend>Add Work Experience</legend>
              <div class="form-group">
                <label>Field</label>
                <?php FormSelect('work_field' , jobFields() , '' , [
                  'class' => 'form-control'
                ])?>
              </div>
              <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" class="form-control">
              </div>
              <div class="form-group">
                <label>Role Description</label>
                <textarea class="form-control" rows="10" name="role_description"></textarea>
              </div>
              <div class="form-group">
                <label>When</label>
                <div class="row">
                  <div class="col-md-5">
                    <label>Date</label>
                    <select class="form-control" name="work_date">
                      <?php foreach(getDates('short') as $date):?>
                        <option value="<?php echo $date;?>"><?php echo $date;?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-md-5">
                    <label>Year</label>
                    <select class="form-control" name="work_year">
                      <?php foreach(generateYear() as $year) :?>
                        <option value="<?php echo $year;?>"><?php echo $year;?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                </div>
              </div>
              <input type="submit" name="createWorkExperience" value="Save Work" class="btn btn-primary">
          </form>
      </div>
    </div>
  </div>
</div>

<?php endbuild()?>


<?php loadTo('orbit/app')?>


