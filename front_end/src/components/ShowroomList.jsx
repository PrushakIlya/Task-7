import { useSelector } from 'react-redux';
const ShowroomList = () => {
  const selectorShowrooms = useSelector(state => state.products.showrooms);
  let id = 1;
  return (
    <div className='border-4 m-5 p-5 w-52 border-black'>
      <h1 className='text-2xl'>Showrooms</h1>
      <ul>
        {selectorShowrooms &&
          selectorShowrooms.map(item => {
            return (
                <div key={id} className='flex text-xl text-cyan-500'>
                  <li className='mr-3'>{id++}</li>
                  <li>{item.name}</li>
                </div>
            );
          })}
      </ul>
    </div>
  );
};

export default ShowroomList;
