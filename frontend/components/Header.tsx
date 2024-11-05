import { Menu } from 'antd';

const Header: React.FC = () => {
    return (
        <div style={{ backgroundColor: '#001529', padding: '10px' }}>
            <Menu theme="dark" mode="horizontal" defaultSelectedKeys={['1']}>
                <Menu.Item key="1">Home</Menu.Item>
                <Menu.Item key="2">Sobre</Menu.Item>
                <Menu.Item key="3">Contato</Menu.Item>
            </Menu>
        </div>
    );
};

export default Header;
