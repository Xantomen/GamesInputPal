/* 
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function formhash(password) {
    
    password = hex_sha512(password);

    return password;
}

function regformhash(username, email, password, conf_password) {
    // Check each field has a value
    if (username == '' || email == '' || password == '' || conf_password == '') {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
    
    // Check the username
    re = /^\w+$/; 
    if(!re.test(username)) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        //username.focus();
        return false; 
    }
    
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        //form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and conf_passwordirmation are the same
    if (password != conf_password) {
        alert('Your password and conf_passwordirmation do not match. Please try again');
        //form.password.focus();
        return false;
    }
        
    password = hex_sha512(password);

    return password;
}

function regformhashnousername(email, password, conf_password) {
    // Check each field has a value
    if (email == '' || password == '' || conf_password == '') {
        alert('You must provide all the requested details. (Email, Password, Confirm Password) Please try again');
        return false;
    }
        
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        //form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and conf_passwordirmation are the same
    if (password != conf_password) {
        alert('Your password and conf_passwordirmation do not match. Please try again');
        //form.password.focus();
        return false;
    }
        
    password = hex_sha512(password);

    return password;
}
