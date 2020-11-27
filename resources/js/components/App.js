import React from "react";
import ReactDOM from 'react-dom';
import  Profile from './Profile/Profile';

function App() {
    return (
       <div>
           <Profile/>
       </div>
    );
}
export default App;
if (document.getElementById('profile-content')) {
    ReactDOM.render(<App />, document.getElementById('profile-content'));
}
