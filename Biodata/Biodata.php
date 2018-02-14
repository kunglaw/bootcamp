<?php

    class Biodata{

        private $name;
        private $alamat;
        private $hobby;
        private $skill;

        function set_name($name)
        {
            return $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_alamat($alamat)
        {
            return $this->alamat = $alamat;
        }

        function get_alamat()
        {
            return $this->alamat;
        }

        function set_hobby($hobby)
        {
            return $this->hobby = $hobby;
        }

        function get_hobby()
        {
            return $this->hobby;
        }

        function set_skill($skill)
        {
            return $this->skill = $skill;
        }

        function get_skill()
        {
            return $this->skill;
        }

        function set_email($email)
        {
            return $this->email = $email;
        }

        function get_email()
        {
            return $this->email;
        }

    }