@import 'variables';

.project-con {
  max-width: 900px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-top: 80px;
}

.project-con:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.title h3 {
  font-size: 45px;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
  letter-spacing: 3px;
  display: inline-block;
  padding: 5px 10px;
  color: transparent; 
  -webkit-text-stroke: 1.5px $primary-color; /* Apply the stroke with black color */
}

.image img {
  width: 100%;
  display: block;
  margin: 0 auto; 
}

.des-con {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  margin-top: -20px;
}


.case_study, .client, .application {
  background: rgba(255, 255, 255, 0.9);
  padding: 25px;
  border-left: 7px solid $secondary-color;
}

.case_study span, 
.client span, 
.application span {
  font-weight: bold;
  color: $secondary-color;
  display: block;
  margin-bottom: 5px;
  font-size: 12px;
  letter-spacing: 2px;
}

.case_study p, 
.client p, 
.application p {
  margin: 0;
  font-size: 12px;
  line-height: 25px;
}


// Tablet
@media (min-width: 768px) {
#main-title {
  margin-top: 220px;
  margin-bottom: -150px;
  padding-bottom: 30px;
  font-size: 65px;
}

.project-con {
  margin: 0 auto; /* Centers horizontally */
  padding: 20px;
  margin-top: 80px;
  scale: 95%;
}

.title h3 {
  font-size: 50px;
  margin-top: 30px;
}  

.image {
  width: 100%;
}

.des-con {
  gap: 15px;
  margin-top: -20px;
}

.case_study, .client, .application {
  padding: 30px;
  border-left: 8px solid $secondary-color;
}

.case_study span, 
.client span, 
.application span {
  font-size: 13.5px;
  letter-spacing: 3px;
}

.case_study p, 
.client p, 
.application p {
  margin: 0;
  font-size: 14.5px;
  line-height: 35px;
}
}




/* Desktop */
@media screen and (min-width: 1200px) {

  .popup-content {
    font-size: 14px;
    line-height: 35px;
  }

  .title h3 {
    font-size: 55px;
    margin-top: 80px;
  }
  
  .case_study span, 
    .client span, 
    .application span {
      font-size: 14.5px;
      letter-spacing: 4px;
    }
    
    .case_study p, 
    .client p, 
    .application p {
      margin: 0;
      font-size: 15.5px;
      line-height: 35px;
    }
}