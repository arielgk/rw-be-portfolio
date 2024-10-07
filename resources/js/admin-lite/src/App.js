import logo from './logo.svg';
import './App.css';
import Login from "./components/Login";
import Posts from "./components/Posts";
import Navbar from "./components/Navbar";
import Restore from "./components/Restore";

import {
    Routes,
    Route
} from "react-router-dom";

function App() {
    return (
        <div className="App">
            <Navbar/>
            <Routes>
                <Route path="/login" element={<Login/>}/>
                <Route path="/restore" element={<Restore/>}/>
                <Route path="/" element={<Posts/>}></Route>
            </Routes>
        </div>
    );
}

export default App;
