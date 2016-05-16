// JavaScript Document
var skills = '<div class="col-md-3"><img src="image/%data%.png" alt="my skills" class="img-responsive img-circle" ></div>';
			
var skills_array = ['1', '2', '3', '4', '5', '6', '7'];

var skills_new = '';

for(var i=0; i < skills_array.length; i += 1){
	skills_new = skills.replace('%data%', skills_array[i]);
	$('skills-section-images').append(skills_new);
}

// experience section

var experience = '<li><h4>%data% &nbsp; &nbsp; &nbsp; ( %data1% )</h4><br><h5>%data2%</h5></li><hr>';

var experience_array = [
	{
		name: 'Coherent',
		years: '2012-2015',
		info: 'what i did'
	},
	{
		name: 'IT',
		years: '2012-2015',
		info: 'what i did'
	},
	{
		name: 'HP',
		years: '2012-2015',
		info: 'what i did'
	}
	
	];
	
	var experience_new = '';
	for(var i=0; i < experience_array.length; i += 1){
		experience_new = experience.replace('%data%', experience_array[i]['.name']);
		experience_new = experience.replace('%data1%', experience_array[i]['.years']);
		experience_new = experience.replace('%data2%', experience_array[i]['.info']);
		$('experience-section-info').append(experience_new);
	}