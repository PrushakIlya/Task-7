import { useDispatch } from 'react-redux';
import { getBrand } from '../../store/productSlice';

export const Input = props => {
  const { id, type, actionField, actionError } = props;
  return (
    <div className='input-block'>
      <label htmlFor={id}>{id}</label>
      <input
        type={type}
        name={id}
        id={id}
        className={id}
        onChange={e => {
          actionField(e.target.value.trim());
        }}
      />
      <div id={`${id}_error`} className='block-error'>
        {actionError}
      </div>
    </div>
  );
};

export const SelectOnChange = props => {
  const dispatch = useDispatch();
  const { types, name, actionField, actionError } = props;
  return (
    <div className='input-block'>
      <label htmlFor={name}>{name}</label>
      <select
        name={name}
        id={name}
        onChange={e => {
          dispatch(getBrand(e.target.value));
          actionField(e.target.value);
        }}>
        <option key='1' value={name} selected disabled>
          choose {name}
        </option>
        {types.map((el, id) => {
          return (
            <option key={`${id}+1`} value={el}>
              {el}
            </option>
          );
        })}
      </select>
      <div id={`${name}_error`} className='block-error'>
        {actionError}
      </div>
    </div>
  );
};

export const Select = props => {
  const { types, name, actionField, actionError } = props;
  return (
    <div className='input-block'>
      <label htmlFor={name}>{name}</label>
      <select
        name={name}
        id={name}
        onChange={e => {
          actionField(e.target.value);
        }}>
        <option key='1' value={name} selected disabled>
          choose {name}
        </option>
        {types.map((el, id) => {
          return (
            <option key={`${id}+1`} value={el}>
              {el}
            </option>
          );
        })}
      </select>
      <div id={`${name}_error`} className='block-error'>
        {actionError}
      </div>
    </div>
  );
};

export const Output = props => {
  const { name, service } = props;
  return (
    <div>
      <p className='text'>{name}</p>
      <p>{service.length === 0 ? '-' : service}</p>
    </div>
  );
};

export const TextArea = props => {
  const { id, actionField } = props;
  return (
    <div className='input-block'>
      <label htmlFor={id}>{id}</label>
      <textarea
        type='textarea'
        name={id}
        id={id}
        className={id}
        onChange={e => {
          actionField(e.target.value.trim());
        }}
      />
    </div>
  );
};
