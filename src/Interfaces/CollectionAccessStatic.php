<?php


namespace Bow\Interfaces;


interface CollectionAccessStatic
{
    /**
     * has, vérifie l'existance une clé dans la colléction de session
     *
     * @param string $key
     * @return boolean
     */
    public static function has($key);

    /**
     * isEmpty, vérifie si une colléction est vide.
     *
     * @return boolean
     */
    public static function isEmpty();

    /**
     * get, permet de récupérer une valeur ou la colléction de valeur.
     *
     * @param string $key=null
     * @return mixed
     */
    public static function get($key = null);

    /**
     * add, ajoute une entrée dans la colléction
     *
     * @param string $key
     * @param $data
     * @param bool $next
     * @return self
     */
    public static function add($key, $data, $next = false);


    /**
     * remove, supprime une entrée dans la colléction
     *
     * @param string $key
     * @return self
     */
    public static function remove($key);

    /**
     * set, modifie une entrée dans la colléction
     *
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public static function set($key, $value);

}
