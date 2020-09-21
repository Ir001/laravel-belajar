import React from "react"
import { Link } from "react-router-dom"
const Header = () => (
    <nav className='navbar navar-dark bg-dark'>
        <div className='container'>
            <Link className='navbar-brand' to='/'>
                Belajar Laravel
            </Link>
        </div>
    </nav>
)
export default Header