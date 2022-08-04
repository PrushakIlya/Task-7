import { Select, Input, SelectOnChange, TextArea } from './blocks/BlockForm';
import { TYPES, SERVICE } from '../vars/vars';
import { useSelector } from 'react-redux';
import { FIRSTNAME_VALIDATION, MOBILE_VALIDATION, MODEL_VALIDATION } from '../vars/validations';
import { FIRSTNAME_ERROR, MOBILE_ERROR, MODEL_ERROR, SELECT_ERROR } from '../vars/errors';
import { useState } from 'react';

const RegistrationForm = () => {
  const selector = useSelector(state => state.products.products);
  const [firstname, setFirstname] = useState('');
  const [firstnameError, setFirstnameError] = useState(null);
  const [mobile, setMobile] = useState('');
  const [mobileError, setMobileError] = useState('');
  const [model, setModel] = useState('');
  const [modelError, setModelError] = useState('');
  const [type, setType] = useState('types');
  const [typeError, setTypeError] = useState('');
  const [brand, setBrand] = useState('brands');
  const [brandError, setBrandError] = useState('');
  const [service, setService] = useState('brands');
  const [serviceError, setServiceError] = useState('');

  const createBill = e => {
    e.preventDefault();
    let agreement = [];

    !firstname.match(FIRSTNAME_VALIDATION) ? setFirstnameError(FIRSTNAME_ERROR) : agreement.push(1) && setFirstnameError(null);
    !mobile.match(MOBILE_VALIDATION) ? setMobileError(MOBILE_ERROR) : agreement.push(1) && setMobileError(null);
    !model.match(MODEL_VALIDATION) ? setModelError(MODEL_ERROR) : agreement.push(1) && setModelError(null);
    type === 'types' ? setTypeError(SELECT_ERROR) : agreement.push(1) && setTypeError(null);
    brand === 'brands' ? setBrandError(SELECT_ERROR) : agreement.push(1) && setBrandError(null);
    service === 'brands' ? setServiceError(SELECT_ERROR) : agreement.push(1) && setServiceError(null);

    if (agreement.length === 6) {
      const formData = new FormData(e.target);
      const formProps = Object.fromEntries(formData);
      const json = JSON.stringify(formProps);
      localStorage.setItem('bill', json);
      document.getElementById('registrationForm').submit();
    }
  };
  return (
    <section className='form'>
        <h1>Live a request</h1>
        <form action='/form' name='registrationForm' id='registrationForm' onSubmit={e => createBill(e)}>
          <Input id='firstname' type='text' actionField={setFirstname} actionError={firstnameError} />
          <Input id='mobile' type='text' actionField={setMobile} actionError={mobileError} />
          <SelectOnChange name='types' types={TYPES} actionField={setType} actionError={typeError} />
          <Select types={selector} name='brands' actionField={setBrand} actionError={brandError} />
          <Select types={SERVICE} name='service' actionField={setService} actionError={serviceError} />
          <Input id='model' type='text' actionField={setModel} actionError={modelError} />
          <TextArea id='description' actionField={setModel} />
          <input type='submit' className='btn' />
        </form>
    </section>
  );
};

export default RegistrationForm;
