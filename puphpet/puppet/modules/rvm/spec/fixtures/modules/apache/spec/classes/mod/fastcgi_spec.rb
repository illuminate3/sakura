describe 'apache::mod::fastcgi', :type => :class do
  let :pre_condition do
    'include apache'
  end
  context "on a Debian OS" do
    let :facts do
      {
        :osfamily               => 'Debian',
        :operatingsystemrelease => '6',
        :concat_basedir         => '/dne',
      }
    end
    it { should contain_class("apache::params") }
    it { should contain_apache__mod('fastcgi') }
    it { should contain_package("libapache2-mod-fastcgi") }
    it { should contain_file('fastcgi.conf') }
  end

  context "on a RedHat OS" do
    let :facts do
      {
        :osfamily               => 'RedHat',
        :operatingsystemrelease => '6',
        :concat_basedir         => '/dne',
      }
    end
    it { should contain_class("apache::params") }
    it { should contain_apache__mod('fastcgi') }
    it { should contain_package("mod_fastcgi") }
    it { should_not contain_file('fastcgi.conf') }
  end
end
