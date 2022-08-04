import { Output } from '../components/blocks/BlockForm';
import { apiStore } from '../vars/api';
import { API_ROOT, API_STORE } from '../vars/api-type';
import { Link } from 'react-router-dom';

const Bill = () => {
  let payload = JSON.parse(localStorage.getItem('bill'));
  localStorage.clear();
  const deadline = Math.floor(Math.random() * 10);
  if (deadline === 0) deadline = 1;
  const cost = Math.floor(Math.random() * 100);
  if (cost === 0) cost = 10;

  const saveData = e => {
    e.preventDefault();
    payload = { ...payload, deadline, cost };
    apiStore(API_ROOT + API_STORE, payload);
  };

  return (
    <section className='bill'>
        <h1>Bill</h1>
        <form onSubmit={e => saveData(e)} method='POST'>
          {Object.entries(payload).map(item => {
            return <Output name={item[0]} service={item[1]} />;
          })}
          <Output name='deadline' service={`${deadline} days`} />
          <Output name='cost' service={`${cost}$`} />
          <div className='btn-block'>
            <input type='submit' value='send' className='btn' />
            <Link to='/' className='btn'>
              back
            </Link>
          </div>
        </form>
    </section>
  );
};

export default Bill;
