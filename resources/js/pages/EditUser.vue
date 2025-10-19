<template>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <Sidebar />
        <div class="body-wrapper">
            <Header />
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    <!-- content starts here  -->
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold mb-4">Users details</h5>
                                
                                <h4 style="font-size: 15px;margin-bottom: 16px;">பிறப்பு விவரங்கள் / Birth Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">பெயர் / Name</label> 
                                        <input type="text"  id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.name" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="birth_date">பிறந்த தேதி / Birth Date</label>
                                        <input type="date" id="birth_date" name="dob" class="form-control read-only-bg" readonly v-model="userDetails.user_details.dob" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="birth_time">பிறந்த நேரம் / Birth Time</label>
                                        <input type="time" id="birth_time" name="birth_time" class="form-control read-only-bg" readonly v-model="userDetails.user_details.birth_time" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="age">வயது / Age</label>
                                        <input type="number" id="age" name="age" v-model="userDetails.user_details.age" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="birth_place">பிறந்த ஊர் / Birth Place</label>
                                        <input type="text" id="birth_place" name="birth_place" v-model="userDetails.user_details.birth_place" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="gender">பாலினம் / Gender</label>
                                        <input type="text" id="gender" name="gender" v-model="userDetails.user_details.genders.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                                <h4 style="font-size: 15px;margin-bottom: 16px;">கல்வி மற்றும் தொழில் விவரங்கள் / Education & Occupation Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">உயர்ந்த கல்வி / Highest Education</label> 
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.educations.value" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">பிரிவு / Education Field</label> 
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.education_field" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">சிறப்பு / Specialization</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.specialization" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">கல்லூரி / பல்கலைக்கழகம் / Institution</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.institution" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">பட்டம் பெற்ற ஆண்டு / Year of Completion</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.completion_year" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">கூடுதல் தகுதிகள் / Additional Qualifications</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.additional_qualifications" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">தொழில் வகை / Occupation Category</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.occupation_category.value" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">பணி / Job Title</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.job_title" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">நிறுவனம் / Company Name</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.company_name" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">வேலை வகை / Employment Type</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.employment_type.value" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">தொழில் துறை / Industry</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.industry.value" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">பணியிடம் / Work Location</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.work_location" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">மாத வருமானம் / Monthly Income</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.salaries.value" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="first_name">அனுபவம் / Years of Experience</label>
                                        <input type="text" id="name" class="form-control form-control-danger read-only-bg" readonly placeholder="name"  v-model="userDetails.user_details.experience_years" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                                <h4 style="font-size: 15px;margin-bottom: 16px;">சொந்த விவரங்கள் / Personal Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="height">ஜாதகரின் உயரம் / Height</label>
                                        <input type="text" id="height" name="height" v-model="userDetails.user_details.heights.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="complexion">ஜாதகரின் நிறம் / Complexion</label>
                                        <input type="text" id="complexion" name="complexion" v-model="userDetails.user_details.complexion.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="caste">ஜாதகரின் உட்பிரிவு / Caste</label>
                                        <input type="text" id="caste" name="caste" v-model="userDetails.user_details.caste" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="religion">ஜாதகரின் மதம் / Religion</label>
                                        <input type="text" id="religion" name="religion" v-model="userDetails.user_details.religion.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="marital_status">திருமண நிலை / Marital Status</label>
                                        <input type="text" id="marital_status" name="marital_status" v-model="userDetails.user_details.marital_status.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="city">நகரம் / City</label>
                                        <input type="text" id="city" name="city" v-model="userDetails.user_details.cities.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="form-label" for="address">முகவரி / Address</label>
                                        <textarea class="form-control read-only-bg" id="address" rows="2" required name="address" v-model="userDetails.user_details.address" readonly></textarea>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="body_type">உடல் அமைப்பு / Body Type</label>
                                        <input type="text" id="body_type" name="body_type" v-model="userDetails.user_details.body_type.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="physical_status">உடல் நிலை / Physical Status</label>
                                        <input type="text" id="physical_status" name="physical_status" v-model="userDetails.user_details.physical_status.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="mother_tongue">தாய்மொழி / Mother Tongue</label>
                                        <input type="text" id="mother_tongue" name="mother_tongue" v-model="userDetails.user_details.mother_tongue" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="interests">விருப்பங்கள் / Interests</label>
                                         <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.interestsList) ? userDetails.user_details.interestsList.map(interest => interest.value).join(', ') : '' }}
                                        </p>
                                        <!-- <input type="text" :id="'interest-' + index" :name="'interest-' + index" v-model="interest.value" class="form-control" aria-describedby="basic-addon1" required> -->
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="hobbies">பொழுதுபோக்குகள் / Hobbies</label>
                                        <!-- <input type="text" id="hobbies" name="hobbies" v-model="userDetails.user_details.hobbiesList.value" class="form-control" aria-describedby="basic-addon1" required> -->
                                        <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.hobbiesList) ? userDetails.user_details.hobbiesList.map(hobby => hobby.value).join(', ') : '' }}
                                        </p>
                                         
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="favourite_cuisine">விருப்பமான சமையல் / Favourite Cuisine</label>
                                        <!-- <input type="text" id="favourite_cuisine" name="favourite_cuisine" v-model="userDetails.user_details.favourite_cuisine" class="form-control" aria-describedby="basic-addon1" required> -->
                                         <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.favoriteCuisine) ? userDetails.user_details.favoriteCuisine.map(cuisine => cuisine.value).join(', ') : '' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="favourite_music_genre">விருப்பமான இசை வகை / Favourite Music Genre</label>
                                        <!-- <input type="text" id="favourite_music_genre" name="favourite_music_genre" v-model="userDetails.user_details.favourite_music_genre" class="form-control" aria-describedby="basic-addon1" required> -->
                                        <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.musicGenre) ? userDetails.user_details.musicGenre.map(genre => genre.value).join(', ') : '' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="sports_fitness">விளையாட்டு / உடற்பயிற்சி / Sports / Fitness</label>
                                        <!-- <input type="text" id="sports_fitness" name="sports_fitness" v-model="userDetails.user_details.sports_fitness" class="form-control" aria-describedby="basic-addon1" required> -->
                                        <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.sportsFitness) ? userDetails.user_details.sportsFitness.map(sport => sport.value).join(', ') : '' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="pet_preference">செல்லப்பிராணி விருப்பம் / Pet Preference</label>
                                        <input type="text" id="pet_preference" name="pet_preference" v-model="userDetails.user_details.pet_preference.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="travel_preference">பயண விருப்பம் / Travel Preference</label>
                                        <input type="text" id="travel_preference" name="travel_preference" v-model="userDetails.user_details.travel_preference.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="dietary_preference">உணவு விருப்பம் / Dietary Preference</label>
                                        <input type="text" id="dietary_preference" name="dietary_preference" v-model="userDetails.user_details.diet_preference.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="smoking_habit">புகைபிடிக்கும் பழக்கம் / Smoking Habit</label>
                                        <input type="text" id="smoking_habit" name="smoking_habit" v-model="userDetails.user_details.smoking_habits.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="drinking_habit">மது அருந்தும் பழக்கம் / Drinking Habit</label>
                                        <input type="text" id="drinking_habit" name="drinking_habit" v-model="userDetails.user_details.drinking_habits.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="languages_known">தெரிந்த மொழிகள் / Languages Known</label>
                                        <!-- <input type="text" id="languages_known" name="languages_known" v-model="userDetails.user_details.languages_known" class="form-control" aria-describedby="basic-addon1" required> -->
                                         <p class="form-control read-only-bg">
                                            {{ Array.isArray(userDetails.user_details.LanguageList) ? userDetails.user_details.LanguageList.map(lang => lang.value).join(', ') : '' }}
                                        </p>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="facebook_profile">FaceBook Profile</label>
                                        <input type="text" id="facebook_profile" name="facebook_profile" v-model="userDetails.user_details.facebook_profile_url" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="instagram_profile">Instagram Profile</label>
                                        <input type="text" id="instagram_profile" name="instagram_profile" v-model="userDetails.user_details.instagram_profile_url" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="twitter_profile">Twitter Profile</label>
                                        <input type="text" id="twitter_profile" name="twitter_profile" v-model="userDetails.user_details.twitter_profile_url" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="about_you">உங்களை பற்றி / About You</label>
                                        <textarea class="form-control read-only-bg" id="about_you" rows="2" required name="about_you" v-model="userDetails.user_details.life_motto" readonly></textarea>
                                    </div>
                                </div>
                                <h4 style="font-size: 15px;margin-bottom: 16px;">Family Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="family_status">குடும்ப நிலை / Family Status</label>
                                        <input type="text" id="family_status" name="family_status" v-model="userDetails.user_details.family_status.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="family_god">குலதெய்வம் / Family God</label>
                                        <input type="text" id="family_god" name="family_god" v-model="userDetails.user_details.family_god" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="father_name">தகப்பனார் / Father Name</label>
                                        <input type="text" id="father_name" name="father_name" v-model="userDetails.user_details.father_name" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>  
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="father_alive">தகப்பனார் / Father</label>
                                        <!-- <input type="text" id="father_alive" name="father_alive" v-model="userDetails.user_details.father_alive" class="form-control" aria-describedby="basic-addon1" required> -->
                                         <p class="form-control read-only-bg">
                                            {{ userDetails.user_details.father_alive == 1 ? 'Alive' : 'Not Alive' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="mother_name">தாயார் / Mother Name</label>
                                        <input type="text" id="mother_name" name="mother_name" v-model="userDetails.user_details.mother_name" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="mother_alive">தாயார் / Mother</label>
                                        <!-- <input type="text" id="mother_alive" name="mother_alive" v-model="userDetails.user_details.mother_alive" class="form-control" aria-describedby="basic-addon1" required> -->
                                        <p class="form-control read-only-bg">
                                            {{ userDetails.user_details.mother_alive == 1 ? 'Alive' : 'Not Alive' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="mobile_number">மொபைல் எண் (பெற்றோர்/கார்டியன்) / Mobile Number (Parent/Guardian)</label>
                                        <input type="text" id="mobile_number" name="mobile_number" v-model="userDetails.user_details.parent_mobile" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="father_work">தகப்பனரின் தொழில், மாத வருமானம் / Father Work, Monthly Salary </label>
                                        <input type="text" id="father_work" name="father_work" v-model="userDetails.user_details.father_work" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="mother_work">தாயார் தொழில், மாத வருமானம் / Mother Work, Monthly Salary </label>
                                        <input type="text" id="mother_work" name="mother_work" v-model="userDetails.user_details.mother_work" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                                <h4 style="font-size: 15px;margin-bottom: 16px;">உடன் பிறந்தவர்களின் விபரம் / Siblings Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="brother_count">ஆண் எண்ணிக்கை / Number of Brothers</label>
                                        <input type="text" id="brother_count" name="brother_count" v-model="userDetails.user_details.brothers_count" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="sister_count">பெண் எண்ணிக்கை / Number of Sisters</label>
                                        <input type="text" id="sister_count" name="sister_count" v-model="userDetails.user_details.sisters_count" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="married_brother_count">திருமணம் ஆன ஆண் / Married Brothers</label>
                                        <input type="text" id="married_brother_count" name="married_brother_count" v-model="userDetails.user_details.married_brothers" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="married_sister_count">திருமணம் ஆன பெண் / Married Sisters</label>
                                        <input type="text" id="married_sister_count" name="married_sister_count" v-model="userDetails.user_details.married_sisters" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="own_house">வீடு / Own House</label>
                                        <input type="text" id="own_house" name="own_house" v-model="userDetails.user_details.own_house" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="family_notes">கூடுதல் குடும்ப விவரங்கள் / Additional Family Details </label>
                                        <textarea class="form-control read-only-bg" id="family_notes" rows="2" required name="family_notes" v-model="userDetails.user_details.family_notes" readonly></textarea>
                                    </div> 
                                </div>
                                <h4 style="font-size: 15px;margin-bottom: 16px;">Horoscope Details</h4>
                                <div class="row">
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="birth_star">ஜென்ம நட்சத்திரம் / Birth Star</label>
                                        <input type="text" id="birth_star" name="birth_star" v-model="userDetails.user_details.birth_stars.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="rahu_ketu">ராகு & கேது / Rahu & Ketu</label>
                                        <p class="form-control read-only-bg">
                                            {{ userDetails.user_details.rahu_ketu == 1 ? 'Present' : 'Not Present' }}
                                        </p>
                                        <!-- <input type="text" id="rahu_ketu" name="rahu_ketu" v-model="userDetails.user_details.rahu_ketu" class="form-control" aria-describedby="basic-addon1" required> -->
                                    </div>  
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="chevvai">செவ்வாய் / Chevvai (Mars)</label>
                                        <p class="form-control read-only-bg">
                                            {{ userDetails.user_details.chevvai == 1 ? 'Present' : 'Not Present' }}
                                        </p>
                                        <!-- <input type="text" id="chevvai" name="chevvai" v-model="userDetails.user_details.chevvai" class="form-control" aria-describedby="basic-addon1" required> -->
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="zodiac_sign">ஜென்ம ராசி / Zodiac Sign</label>
                                        <input type="text" id="zodiac_sign" name="zodiac_sign" v-model="userDetails.user_details.zodiacs.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="birth_lagnam">ஜென்ம லக்கினம் / Birth Lagnam</label>
                                        <input type="text" id="birth_lagnam" name="birth_lagnam" v-model="userDetails.user_details.birth_lagnam.value" class="form-control read-only-bg" readonly aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="expectations">எதிர்பார்ப்புகள் / Expectations </label>
                                        <textarea class="form-control read-only-bg" id="expectations" rows="2" required name="expectations" v-model="userDetails.user_details.expectations" readonly></textarea>
                                    </div> 
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="previous_marriage">முன்பே திருமணமானவராயின் அதுபற்றி விவரம் / Previous Marriage Details</label>
                                        <textarea class="form-control read-only-bg" id="previous_marriage" rows="2" required name="previous_marriage" v-model="userDetails.user_details.previous_marriage" readonly></textarea>
                                    </div>  
                                    <div class="form-group col-12 col-md-3 mb-3">
                                        <label class="form-label" for="additional_horoscope_details">கூடுதல் ஜாதக விவரங்கள் / Additional Horoscope Details</label>
                                        <textarea class="form-control read-only-bg" id="additional_horoscope_details" rows="2" required name="additional_horoscope_details" v-model="userDetails.user_details.additional_horoscope" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import { useRoute } from 'vue-router'
    import Sidebar from '../components/Sidebar.vue'
    import Header from '../components/Header.vue';
    import Api from '../services/Api.js';

    const userDetails = ref({
        user_details: {
            birth_time: '',
            dob: '',
            age: '',
            genders: {
                value: ''
            },
            educations: {
                value: ''
            },
            education_field: '',
            industry: {
                value: ''
            },
            occupation_category: {
                value: ''
            },
            salaries: {
                value: ''
            },
            complexion: {
                value: ''
            },
            religion: { 
                value: ''
            },
            marital_status: {
                value: ''
            },
            cities: {
                value: ''
            },
            employment_type: {
                value: ''
            },
            body_type: {
                value: ''
            },
            physical_status: {
                value: ''
            },
            mother_tongue: '',
            interestsList: {
                value: ''
            },
            hobbies: '',
            favourite_cuisine: {
                value: ''
            },
            favourite_music_genre: {
                value: ''
            },
            sports_fitness: {
                value: ''
            },
            pet_preference: {
                value: ''
            },
            smoking_habits: {
                value: ''
            },
            drinking_habits: {
                value: ''
            },

            travel_preference: {
                value: ''
            },  
            diet_preference: {
                value: ''
            },
            smoking_habit: {
                value: ''
            },
            drinking_habit: {
                value: ''
            },  
            languages_known: '',
            facebook_profile_url: '',
            instagram_profile_url: '',
            twitter_profile_url: '',
            about_you: '',
            family_status: {
                value: ''
            },
            father_alive: '',
            mother_alive: '',
            brother_count: '',
            sister_count: '',
            married_brother_count: '',
            married_sister_count: '',
            own_house: '',
            birth_stars: {
                value: ''
            },
            parent_mobile: '',
            zodiacs: {
                value: ''
            },
            birth_lagnam: {
                value: ''
            },
            heights: {
                value: ''
            },
            hobbiesList: {
                value: ''
            }
        }
    })
    const route = useRoute()
    const user_identifier = route.params.identifier;
    console.log("User Identifier:", user_identifier);
    console.log("education_field:", userDetails.value.user_details.education_field);

  onMounted(() => {
    loadUserDetails()
  })

    const loadUserDetails = async () => {
        try {
            const response = await Api.getUserDetails(user_identifier)
            userDetails.value = JSON.parse(JSON.stringify(response.data));
            console.log(userDetails.value.user_details.interestsList);
            if (userDetails.value.status === 400) {
                console.error("Error loading users:", userDetails.value.message)
            }
        } catch (error) {
        console.error("Error loading users:", error)
        }
    }
</script>
