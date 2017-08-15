<?php

class Page extends Model
{
    public function getList()
    {
        $sql = "SELECT * FROM `pages`;";

        return $this->db->query($sql);
    }

    public function getByAlias($alias)
    {
        $alias = $this->db->escape($alias);
        $sql = "SELECT * FROM `pages` WHERE `alias` = '$alias' LIMIT 1;";
        $result = $this->db->query($sql);

        return isset($result[0]) ? $result[0] : null;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM `pages` WHERE `id` = '$id' LIMIT 1;";
        $result = $this->db->query($sql);

        return isset($result[0]) ? $result[0] : null;
    }

    public function save($data, $id = null)
    {
        $id = (int) $id;

        $alias = $this->db->escape($data['alias']);
        $title = $this->db->escape($data['title']);
        $content = $this->db->escape($data['content']);

        if (empty($id)) {
            $sql = "INSERT INTO `pages` (`alias`, `title`, `content`) 
                    VALUES ('$alias', '$title', '$content');";
        } else {
            $sql = "UPDATE `pages` 
                    SET `alias` = '$alias',
                    `title` = '$title',
                    `content` = '$content'
                    WHERE `id` = $id;";
        }

        return $this->db->query($sql);
    }

    public function deleteById($id)
    {
        $id = (int) $id;
        $sql = "DELETE FROM `pages` WHERE `id` = $id";

        return $this->db->query($sql);
    }
}