import FormComponent from './FormComponent';
// import { apiPersist } from './../api/api';
import { useState } from 'react';
import {EMAIL_EXPRESSION, PASSWORD_EXPRESSION} from './../vars/expressions'

const Autorization = () => {
  const [email, setEmail] = useState();
  const [password, setPassword] = useState();
  const [passwordConf, setPasswordConf] = useState();
  
  const [errorEmail, setErrorEmail] = useState();
  const [errorPassword, setErrorPassword] = useState();
  const [errorPasswordConf, setErrorPasswordConf] = useState();

  const Submit = e => {
    e.preventDefault();

    // if(email.match(EMAIL_EXPRESSION) && password.match(PASSWORD_EXPRESSION) && password === passwordConf){
    //   console.log('ok');
    // }

    console.log(1)
    // const form = new FormData(e.target);
    // const payload = Object.fromEntries(form.entries());
    // apiPersist(payload);
  };
  return (
    <>
      <h1>Autorize Form</h1>
      <form onSubmit={Submit}>
        <FormComponent name='email' type='text' error='error_email' state={setEmail} blockError={errorEmail}/>
        <FormComponent name='password' type='password' error='error_password' state={setPassword} blockError={errorPassword}/>
        <FormComponent name='password_conf' type='password_conf' error='error_password_conf' state={setPasswordConf} blockError={errorPasswordConf}/>
        <input type='submit' value='login' />
      </form>
    </>
  );
};

export default Autorization;
