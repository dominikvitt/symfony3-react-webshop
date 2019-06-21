import React, { Component } from 'react';
     
class Navbar extends Component {
    render(){
        return (
            <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <a className="navbar-brand" href="#"> Home</a>
            <a className="navbar-brand" href="#"> Products</a>
        </nav>
    )
    }
}
export default Navbar;