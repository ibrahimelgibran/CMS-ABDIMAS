<?php

class M_pendaftar extends CI_Model
{
    private $table = 'pendaftar';
    var $column_order = array(null, 'nama_lengkap', 'jalur');
    var $column_search = array('nama_lengkap', 'jalur');
    var $order = array('id_pendaftar' => 'desc');

    function __construct()
    {
        parent::__construct();
    }

    public function getData(array $param = null)
    {
        $this->db->from($this->table);

        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }


    public function get_nilaisiswa(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*');
        $this->db->from('pendaftar');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }


    public function get_nilaisiswa_semester1(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester1.*, b_nilaisemester1.*, c1_nilaisemester1.*, c2_nilaisemester1.*, c3_nilaisemester1.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester1', 'a_nilaisemester1.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester1', 'b_nilaisemester1.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester1', 'c1_nilaisemester1.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester1', 'c2_nilaisemester1.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester1', 'c3_nilaisemester1.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }






    public function get_dataprogramtahunan(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('*');
        $this->db->from('programtahunan');
        $this->db->order_by('nama_programtahunan', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }











    public function get_nilaisiswa_semester2(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester2.*, b_nilaisemester2.*, c1_nilaisemester2.*, c2_nilaisemester2.*, c3_nilaisemester2.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester2', 'a_nilaisemester2.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester2', 'b_nilaisemester2.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester2', 'c1_nilaisemester2.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester2', 'c2_nilaisemester2.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester2', 'c3_nilaisemester2.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }

    public function get_nilaisiswa_semester3(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester3.*, b_nilaisemester3.*, c1_nilaisemester3.*, c2_nilaisemester3.*, c3_nilaisemester3.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester3', 'a_nilaisemester3.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester3', 'b_nilaisemester3.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester3', 'c1_nilaisemester3.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester3', 'c2_nilaisemester3.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester3', 'c3_nilaisemester3.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }

    public function get_nilaisiswa_semester4(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester4.*, b_nilaisemester4.*, c1_nilaisemester4.*, c2_nilaisemester4.*, c3_nilaisemester4.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester4', 'a_nilaisemester4.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester4', 'b_nilaisemester4.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester4', 'c1_nilaisemester4.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester4', 'c2_nilaisemester4.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester4', 'c3_nilaisemester4.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }

    public function get_nilaisiswa_semester5(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester5.*, b_nilaisemester5.*, c1_nilaisemester5.*, c2_nilaisemester5.*, c3_nilaisemester5.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester5', 'a_nilaisemester5.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester5', 'b_nilaisemester5.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester5', 'c1_nilaisemester5.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester5', 'c2_nilaisemester5.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester5', 'c3_nilaisemester5.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }

    public function get_nilaisiswa_semester6(array $param = null)
    {
        //select semua data nilai siswa dan data siswa
        $this->db->select('pendaftar.*, a_nilaisemester6.*, b_nilaisemester6.*, c1_nilaisemester6.*, c2_nilaisemester6.*, c3_nilaisemester6.*');
        $this->db->from('pendaftar');
        $this->db->join('a_nilaisemester6', 'a_nilaisemester6.id_siswa = pendaftar.noinduk');
        $this->db->join('b_nilaisemester6', 'b_nilaisemester6.id_siswa = pendaftar.noinduk');
        $this->db->join('c1_nilaisemester6', 'c1_nilaisemester6.id_siswa = pendaftar.noinduk');
        $this->db->join('c2_nilaisemester6', 'c2_nilaisemester6.id_siswa = pendaftar.noinduk');
        $this->db->join('c3_nilaisemester6', 'c3_nilaisemester6.id_siswa = pendaftar.noinduk');
        $this->db->order_by('kelas', 'ASC');
        $this->db->order_by('nama_lengkap', 'ASC');
        if (!is_null($param)) {
            if (array_key_exists('where', $param)) {
                if (is_array($param['where'])) {
                    foreach ($param['where'] as $k => $v) {
                        $this->db->where($k, $v);
                    }
                } else {
                    $this->db->where($param['where']);
                }
            }

            if (array_key_exists('compiled', $param)) {
                echo $this->db->get_compiled_select();
                exit;
            }
        }

        return $this->db->get();
    }


    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_list_countries()
    {
        $this->db->select('country');
        $this->db->from($this->table);
        $this->db->order_by('country', 'asc');
        $query = $this->db->get();
        $result = $query->result();

        $countries = array();
        foreach ($result as $row) {
            $countries[] = $row->country;
        }
        return $countries;
    }

    public function updateData($data, $id)
    {
        $this->db->where('id_pendaftar', $id);
        $this->db->set($data);
        $this->db->update('pendaftar');
        return $this->db->affected_rows();
    }
}
